<?php

// Đặt đúng đường dẫn tới thư mục ảnh từ vị trí includes/data-pages
$IMAGE_ROOT = __DIR__ . '/../../assets/img';
$IMAGE_ROOT_REL = '/assets/img';

$ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

function gatherImages(string $root, array $allowed): array
{
    $result = [];

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if (!$file->isFile()) {
            continue;
        }

        $ext = strtolower($file->getExtension());
        if (!in_array($ext, $allowed, true)) {
            continue;
        }

        $relativePath = str_replace($root . DIRECTORY_SEPARATOR, '', $file->getPathname());
        $category = str_replace(DIRECTORY_SEPARATOR, '/', dirname($relativePath));
        $filename = $file->getFilename();

        if ($category === '.' || $category === '') {
            $category = '';
        }

        if (!isset($result[$category])) {
            $result[$category] = [];
        }
        $result[$category][] = $filename;
    }

    ksort($result);
    foreach ($result as &$files) {
        sort($files);
    }
    unset($files);

    return $result;
}

$IMAGES_BY_CATEGORY = gatherImages($IMAGE_ROOT, $ALLOWED_EXTENSIONS);

$ALL_IMAGE_NAMES = [];
$ALL_IMAGE_PATHS = [];
foreach ($IMAGES_BY_CATEGORY as $category => $files) {
    foreach ($files as $name) {
        $ALL_IMAGE_NAMES[] = $name;
        $path = $IMAGE_ROOT_REL . ($category !== '' ? '/' . $category : '') . '/' . $name;
        $ALL_IMAGE_PATHS[] = $path;
    }
}

$IMAGES_VARS = [];
foreach ($IMAGES_BY_CATEGORY as $category => $files) {
    $key = 'IMAGES_' . strtolower(preg_replace('/[^A-Za-z0-9]+/', '_', $category));
    $key = rtrim($key, '_');
    if ($key === 'IMAGES_') {
        $key = 'IMAGES_root';
    }
    $IMAGES_VARS[$key] = $files;
    ${$key} = $files; // tạo biến tiện dụng, ví dụ: $IMAGES_deluxe, $IMAGES_post_wedding
}

function image_names_for(string $category): array
{
    global $IMAGES_BY_CATEGORY;
    $category = trim($category, '/');
    return $IMAGES_BY_CATEGORY[$category] ?? [];
}

function image_paths_for(string $category): array
{
    global $IMAGES_BY_CATEGORY, $IMAGE_ROOT_REL;
    $category = trim($category, '/');
    $files = $IMAGES_BY_CATEGORY[$category] ?? [];
    $prefix = $IMAGE_ROOT_REL . ($category !== '' ? '/' . $category : '');
    return array_map(fn($f) => $prefix . '/' . $f, $files);
}