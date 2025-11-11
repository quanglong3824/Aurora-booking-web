<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/config.php';

$pdo = getDB();
$message = '';
$error = '';

function h($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// Danh sách các trường phòng kinh doanh thường dùng
$BUSINESS_FIELDS = [
  'room_deluxe_title',
  'room_deluxe_hero_subtitle',
  'room_deluxe_description',
  'room_deluxe_price_text',
  'room_deluxe_per_night_text',
  'room_deluxe_booking_url',
  'room_deluxe_book_button_text',
  'room_deluxe_contact_hotline_label',
  'room_deluxe_contact_hotline',
  'room_deluxe_contact_email_label',
  'room_deluxe_contact_email_booking',
  'room_deluxe_contact_email_info',
  'room_deluxe_amenities',
  'room_deluxe_included_services',
  'room_deluxe_specs',
  'room_deluxe_related_heading',
  'room_deluxe_related1_title',
  'room_deluxe_related1_price',
  'room_deluxe_related1_btn_text',
  'room_deluxe_related2_title',
  'room_deluxe_related2_price',
  'room_deluxe_related2_btn_text'
];

function getAllDeluxe($pdo) {
    $stmt = $pdo->query("SELECT * FROM deluxe_sang_trong ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDeluxeById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM deluxe_sang_trong WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Nếu cần lấy full schema thì dùng DESCRIBE; hiện không dùng khi hiển thị theo BUSINESS_FIELDS
function getColumns($pdo, $table) {
    $stmt = $pdo->query("DESCRIBE `{$table}`");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';
        if ($action === 'update') {
            $id = (int)($_POST['id'] ?? 0);
            // Cập nhật theo BUSINESS_FIELDS để đảm bảo chỉ sửa các trường kinh doanh
            $allowed = $BUSINESS_FIELDS;
            $setParts = [];
            $values = [];
            foreach ($allowed as $col) {
                if ($col === 'id') continue; // không cập nhật ID
                if (array_key_exists($col, $_POST)) {
                    $setParts[] = "`$col` = ?";
                    $values[] = $_POST[$col];
                }
            }
            if (!empty($setParts)) {
                $sql = "UPDATE `deluxe_sang_trong` SET " . implode(', ', $setParts) . " WHERE id = ?";
                $values[] = $id;
                $stmt = $pdo->prepare($sql);
                $stmt->execute($values);
            }
            header('Location: ' . url('admin/index.php?edit=' . $id . '&success=1'));
            exit;
        }
    }
} catch (Throwable $e) {
    $error = $e->getMessage();
}

$rows = [];
$columns = [];
try {
    $rows = getAllDeluxe($pdo);
    // Chỉ hiển thị các trường kinh doanh: chuyển từ list field sang cấu trúc tương tự DESCRIBE
    $columns = array_map(function($f){
      return ['Field' => $f, 'Type' => 'text'];
    }, array_merge(['id'], $BUSINESS_FIELDS));
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
    .table-wrap { overflow-x:auto; -webkit-overflow-scrolling: touch; border:1px solid #e5e7eb; border-radius:8px; }
    .table-wrap table { width:100%; border-collapse: collapse; margin-top: 0; min-width: 1200px; table-layout: fixed; }
    th, td { border: 1px solid #ddd; padding: 8px; vertical-align: top; }
    th { background: #f6f8fa; text-align: left; }
    td, th { max-width: 240px; word-break: break-word; }
    .actions { display:flex; gap:8px; }
    .btn { display:inline-block; padding:8px 12px; border-radius:6px; text-decoration:none; border:1px solid #ccc; background:#fff; color:#333; }
    .btn.primary { background:#2563eb; border-color:#1f56cc; color:#fff; }
    .btn.danger { background:#dc2626; border-color:#b91c1c; color:#fff; }
    form.inline { display:inline; }
    form.edit { max-width:980px; padding:16px; border:1px solid #e5e7eb; border-radius:10px; background:#fafafa; }
    .form-grid { display:grid; grid-template-columns: 1fr 1fr; gap:12px; }
    .field.full { grid-column: 1 / -1; }
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
  <?php if ($error): ?>
    <div class="status error">Lỗi: <?php echo h($error); ?></div>
  <?php endif; ?>

  <section>
    <h2>Danh sách bản ghi Deluxe (trường phòng kinh doanh)</h2>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <?php foreach ($columns as $col): ?>
              <th><?php echo h($col['Field']); ?></th>
            <?php endforeach; ?>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $row): ?>
            <tr>
              <?php foreach ($columns as $col): $field = $col['Field']; ?>
                <td><?php 
                  $val = $row[$field] ?? '';
                  $text = (string)$val;
                  if (strlen($text) > 120) { $text = substr($text, 0, 120) . '…'; }
                  echo nl2br(h($text));
                ?></td>
              <?php endforeach; ?>
              <td class="actions">
                <a class="btn primary" href="<?php echo url('admin/index.php?edit=' . (int)$row['id']); ?>">Sửa</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <?php if ($editing): ?>
    <section style="margin-top:24px;">
      <h2>Sửa bản ghi #<?php echo h($editing['id']); ?></h2>
      <form class="edit" method="post" action="<?php echo url('admin/index.php'); ?>">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo h($editing['id']); ?>">
        <div class="form-grid">
        <?php 
          $cols = $columns; // gồm id + BUSINESS_FIELDS
          foreach ($cols as $c):
            $field = $c['Field'];
            $type = strtolower($c['Type']);
            $val = $editing[$field] ?? '';
            $isText = strpos($type, 'text') !== false;
            $isTextareaByName = preg_match('/(_description|_amenities|_included_services|_specs|_gallery_images|breadcrumb)$/', $field);
            $fullClass = ($isText || $isTextareaByName || $field === 'id') ? ' field full' : ' field';
            echo '<div class="' . $fullClass . '" style="margin-bottom:12px;">';
            echo '<label for="' . h($field) . '">' . h($field) . '</label>';
            if ($field === 'id') {
              echo '<input type="text" value="' . h($val) . '" disabled>';
            } else {
              if ($isText || $isTextareaByName) {
                echo '<textarea id="' . h($field) . '" name="' . h($field) . '">' . h($val) . '</textarea>';
                if (preg_match('/(_amenities|_included_services|_specs)$/', $field)) {
                  echo '<div style="font-size:12px;color:#6b7280;margin-top:6px;">Gợi ý: nhập JSON hợp lệ. Ví dụ amenities: ["Wifi","Hồ bơi"]. Specs: [{"label":"Diện tích","value":"35m²"}]</div>';
                }
              } else {
                echo '<input type="text" id="' . h($field) . '" name="' . h($field) . '" value="' . h($val) . '">';
              }
            }
            echo '</div>';
          endforeach;
        ?>
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