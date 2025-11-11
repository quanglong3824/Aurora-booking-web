<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/config.php';

$pdo = getDB();
$message = '';
$error = '';

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function getAllDeluxe($pdo) {
    // Schema dùng tiền tố room_deluxe_*
    $stmt = $pdo->query("SELECT id, room_deluxe_title, room_deluxe_hero_subtitle FROM deluxe_sang_trong ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDeluxeById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM deluxe_sang_trong WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';
        if ($action === 'update') {
            $id = (int)($_POST['id'] ?? 0);
            // Map form inputs sang cột thật trong DB (room_deluxe_*)
            $page_title = trim($_POST['page_title'] ?? ''); // -> room_deluxe_title
            $hero_subtitle = trim($_POST['hero_subtitle'] ?? ''); // -> room_deluxe_hero_subtitle
            $about_paragraph = trim($_POST['about_paragraph'] ?? ''); // -> room_deluxe_description
            $price_text = trim($_POST['price_text'] ?? ''); // -> room_deluxe_price_text
            $contact_phone = trim($_POST['contact_phone'] ?? ''); // -> room_deluxe_contact_hotline
            $contact_email = trim($_POST['contact_email'] ?? ''); // -> room_deluxe_contact_email_booking

            $sql = "UPDATE deluxe_sang_trong 
                    SET room_deluxe_title = ?, 
                        room_deluxe_hero_subtitle = ?, 
                        room_deluxe_description = ?, 
                        room_deluxe_price_text = ?, 
                        room_deluxe_contact_hotline = ?, 
                        room_deluxe_contact_email_booking = ?
                    WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$page_title, $hero_subtitle, $about_paragraph, $price_text, $contact_phone, $contact_email, $id]);
            header('Location: ' . url('admin/index.php?edit=' . $id . '&success=1'));
            exit;
        } elseif ($action === 'delete') {
            $id = (int)($_POST['id'] ?? 0);
            $stmt = $pdo->prepare('DELETE FROM deluxe_sang_trong WHERE id = ?');
            $stmt->execute([$id]);
            header('Location: ' . url('admin/index.php?deleted=1'));
            exit;
        }
    }
} catch (Throwable $e) {
    $error = $e->getMessage();
}

$rows = [];
try {
    $rows = getAllDeluxe($pdo);
} catch (Throwable $e) {
    $error = $e->getMessage();
}

$editing = null;
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    try {
        $editing = getDeluxeById($pdo, $editId);
    } catch (Throwable $e) {
        $error = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin tạm thời — Deluxe URD</title>
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>">
  <style>
    body { padding: 20px; font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial; }
    header { display:flex; align-items:center; justify-content:space-between; margin-bottom: 20px; }
    .status { margin:10px 0; padding:10px; border-radius:6px; }
    .status.success { background:#e7f6e7; color:#136a19; border:1px solid #bfe3bf; }
    .status.error { background:#fdeaea; color:#8a1111; border:1px solid #f5c2c2; }
    table { width:100%; border-collapse: collapse; margin-top: 10px; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    th { background: #f6f8fa; text-align: left; }
    .actions { display:flex; gap:8px; }
    .btn { display:inline-block; padding:8px 12px; border-radius:6px; text-decoration:none; border:1px solid #ccc; background:#fff; color:#333; }
    .btn.primary { background:#2563eb; border-color:#1f56cc; color:#fff; }
    .btn.danger { background:#dc2626; border-color:#b91c1c; color:#fff; }
    form.inline { display:inline; }
    form.edit { max-width:820px; padding:16px; border:1px solid #e5e7eb; border-radius:10px; background:#fafafa; }
    .grid { display:grid; grid-template-columns: 1fr 1fr; gap:12px; }
    label { font-weight:600; margin-bottom:4px; display:block; }
    input[type="text"], textarea { width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; }
    textarea { min-height: 90px; }
  </style>
</head>
<body>
  <header>
    <h1>Admin tạm thời — Deluxe URD</h1>
    <a class="btn" href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" target="_blank">Xem trang Deluxe</a>
  </header>

  <?php if (!empty($_GET['success'])): ?>
    <div class="status success">Cập nhật thành công.</div>
  <?php endif; ?>
  <?php if (!empty($_GET['deleted'])): ?>
    <div class="status error">Đã xoá bản ghi.</div>
  <?php endif; ?>
  <?php if ($error): ?>
    <div class="status error">Lỗi: <?php echo h($error); ?></div>
  <?php endif; ?>

  <section>
    <h2>Danh sách bản ghi Deluxe</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Tiêu đề trang</th>
          <th>Phụ đề hero</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $row): ?>
          <tr>
            <td><?php echo h($row['id']); ?></td>
            <td><?php echo h($row['room_deluxe_title']); ?></td>
            <td><?php echo h($row['room_deluxe_hero_subtitle']); ?></td>
            <td class="actions">
              <a class="btn primary" href="<?php echo url('admin/index.php?edit=' . (int)$row['id']); ?>">Sửa</a>
              <form class="inline" method="post" action="<?php echo url('admin/index.php'); ?>" onsubmit="return confirm('Xác nhận xoá bản ghi này?');">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?php echo h($row['id']); ?>">
                <button type="submit" class="btn danger">Xoá</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>

  <?php if ($editing): ?>
    <section style="margin-top:24px;">
      <h2>Sửa bản ghi #<?php echo h($editing['id']); ?></h2>
      <form class="edit" method="post" action="<?php echo url('admin/index.php'); ?>">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo h($editing['id']); ?>">
        <div class="grid">
          <div>
            <label for="page_title">Tiêu đề trang</label>
            <input type="text" id="page_title" name="page_title" value="<?php echo h($editing['room_deluxe_title'] ?? ''); ?>">
          </div>
          <div>
            <label for="hero_subtitle">Hero subtitle</label>
            <input type="text" id="hero_subtitle" name="hero_subtitle" value="<?php echo h($editing['room_deluxe_hero_subtitle'] ?? ''); ?>">
          </div>
          <div>
            <label for="price_text">Giá/ưu đãi</label>
            <input type="text" id="price_text" name="price_text" value="<?php echo h($editing['room_deluxe_price_text'] ?? ''); ?>">
          </div>
        </div>
        <div style="margin-top:12px;">
          <label for="about_paragraph">Mô tả giới thiệu</label>
          <textarea id="about_paragraph" name="about_paragraph"><?php echo h($editing['room_deluxe_description'] ?? ''); ?></textarea>
        </div>
        <div class="grid" style="margin-top:12px;">
          <div>
            <label for="contact_phone">Số điện thoại</label>
            <input type="text" id="contact_phone" name="contact_phone" value="<?php echo h($editing['room_deluxe_contact_hotline'] ?? ''); ?>">
          </div>
          <div>
            <label for="contact_email">Email liên hệ</label>
            <input type="text" id="contact_email" name="contact_email" value="<?php echo h($editing['room_deluxe_contact_email_booking'] ?? ''); ?>">
          </div>
        </div>
        <div style="margin-top:16px;">
          <button type="submit" class="btn primary">Lưu thay đổi</button>
          <a class="btn" href="<?php echo url('admin/index.php'); ?>">Huỷ</a>
        </div>
      </form>
    </section>
  <?php endif; ?>
</body>
</html>