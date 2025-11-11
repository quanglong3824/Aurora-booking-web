<?php
// Random suggestions component for rooms/apartments
// Usage:
//   include_once '<path>/includes/UI-Random-Rooms/random-suggestions.php';
//   aurora_render_random_suggestions('apartment', 3);
//   aurora_render_random_suggestions('room', 3);

if (!function_exists('aurora_array_get')) {
    function aurora_array_get($arr, $key, $default = '') {
        return isset($arr[$key]) && trim((string)$arr[$key]) !== '' ? $arr[$key] : $default;
    }
}

// Build a normalized item structure
if (!function_exists('aurora_make_item')) {
    function aurora_make_item($title, $subtitle, $price, $per_night, $specs, $image, $link) {
        return [
            'title' => $title,
            'subtitle' => $subtitle,
            'price' => $price,
            'per_night' => $per_night,
            'specs' => is_array($specs) ? $specs : [],
            'image' => $image,
            'link' => $link,
        ];
    }
}

// Encapsulate includes to avoid global variable collisions
if (!function_exists('aurora_build_apartment_items')) {
    function aurora_build_apartment_items() {
        $items = [];

        // Family Apartment
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-family-apartment.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Căn hộ Family Gia Đình',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                isset($main_image) ? $main_image : 'img/family apartment/CAN-HO-FAMILY-AURORA-HOTEL-5.jpg',
                'pages/can-ho/family-gia-dinh.php'
            );
        })();

        // Premium Apartment
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-premium-apartment.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Căn hộ Premium Sang Trọng',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                isset($main_image) ? $main_image : 'img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-2.jpg',
                'pages/can-ho/premium-sang-trong.php'
            );
        })();

        // Modern Studio Apartment
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-modern-studio-apartment.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Căn hộ Studio Hiện Đại',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                isset($main_image) ? $main_image : 'img/Modern studio apartment/modern-studio-apartment-1.jpg',
                'pages/can-ho-moi/can-ho-nho/morden-studio-apartment.php'
            );
        })();

        // Indochine Studio Apartment
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-indochine-studio.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Căn Hộ Studio Indochine',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                'img/Indochine studio apartment/indochine-studio-apartment-1.jpg',
                'pages/can-ho-moi/can-ho-nho/indochine-studio-apartment.php'
            );
        })();

        return $items;
    }
}

if (!function_exists('aurora_build_room_items')) {
    function aurora_build_room_items() {
        $items = [];

        // Deluxe Room
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-deluxe.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Phòng Deluxe Sang Trọng',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                'img/deluxe/DELUXE-ROOM-AURORA-1.jpg',
                'pages/phong/deluxe-sang-trong.php'
            );
        })();

        // Premium Deluxe Cao Cấp
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-premium-deluxe.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Premium Deluxe Cao Cấp',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-1.jpg',
                'pages/phong/premium-deluxe-cao-cap.php'
            );
        })();

        // Premium Deluxe Twin Đôi
        (function () use (&$items) {
            include __DIR__ . '/../data-pages/data-premium-deluxe-twin.php';
            $items[] = aurora_make_item(
                $page_title ?? 'Premium Deluxe Twin Đôi',
                $hero_subtitle ?? '',
                $price_text ?? '',
                $per_night_text ?? '',
                $specs ?? [],
                'img/premium twin/PREMIUM-DELUXE-TWIN-AURORA-1.jpg',
                'pages/phong/premium-deluxe-twin-doi.php'
            );
        })();

        return $items;
    }
}

if (!function_exists('aurora_render_random_suggestions')) {
    function aurora_render_random_suggestions($type = 'apartment', $count = 3) {
        $pool = $type === 'room' ? aurora_build_room_items() : aurora_build_apartment_items();
        if (empty($pool)) return;
        shuffle($pool);
        $items = array_slice($pool, 0, max(1, (int)$count));

        echo '<section class="random-suggestions" style="padding:48px 0;">';
        echo '  <div class="container">';
        echo '    <div class="section-header" style="text-align:center; margin-bottom:24px;">';
        echo '      <h2 class="section-title" style="margin-bottom:8px;">Gợi ý dành cho bạn</h2>';
        echo '      <p class="section-subtitle" style="color:#6b7280;">Ngẫu nhiên 3 lựa chọn phù hợp</p>';
        echo '    </div>';

        echo '    <div class="suggest-grid" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:20px;">';
        foreach ($items as $item) {
            $title = aurora_array_get($item, 'title');
            $subtitle = aurora_array_get($item, 'subtitle');
            $price = aurora_array_get($item, 'price');
            $perNight = aurora_array_get($item, 'per_night');
            $image = aurora_array_get($item, 'image');
            $link = aurora_array_get($item, 'link');
            $specs = is_array($item['specs']) ? $item['specs'] : [];

            echo '      <article class="overview-card" style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fff;">';
            echo '        <div class="overview-image" style="max-height:220px; overflow:hidden;">';
            echo '          <img src="' . asset($image) . '" alt="' . htmlspecialchars($title) . '" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">';
            echo '        </div>';
            echo '        <div class="overview-body" style="padding:16px;">';
            echo '          <h3 style="margin-bottom:8px; font-size:18px;">' . htmlspecialchars($title) . '</h3>';
            if ($subtitle) {
                echo '      <p style="color:#6b7280; font-size:14px; margin-bottom:10px;">' . htmlspecialchars($subtitle) . '</p>';
            }
            // Spec chips (max 3)
            echo '          <div class="spec-chips" style="display:flex; flex-wrap:wrap; gap:8px; margin-bottom:12px;">';
            $chipCount = 0;
            foreach ($specs as $spec) {
                if ($chipCount >= 3) break;
                $label = isset($spec['label']) ? trim($spec['label']) : '';
                $value = isset($spec['value']) ? trim($spec['value']) : '';
                if ($label === '' && $value === '') continue;
                echo '    <span style="border:1px solid #e5e7eb; border-radius:9999px; padding:6px 10px; font-size:12px; color:#374151; background:#f9fafb;">' . htmlspecialchars(($label ? $label . ' ' : '') . $value) . '</span>';
                $chipCount++;
            }
            echo '          </div>';

            echo '          <div class="price-line" style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">';
            echo '            <span style="font-weight:600; color:#111827;">' . htmlspecialchars($price) . '</span>';
            echo '            <span style="color:#6b7280;">' . htmlspecialchars($perNight) . '</span>';
            echo '          </div>';

            echo '          <a href="' . url($link) . '" class="btn-room" style="text-align:center; display:block;">Xem Chi Tiết</a>';
            echo '        </div>';
            echo '      </article>';
        }
        echo '    </div>';
        echo '  </div>';
        echo '</section>';
    }
}

?>