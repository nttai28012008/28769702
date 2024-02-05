<?php
// Đọc nội dung từ file key.json
$keyData = file_get_contents('key.json');
$check_key = json_decode($keyData, true);

// Nhận dữ liệu từ yêu cầu POST
$key = isset($_POST['key']) ? $_POST['key'] : '';
$login = isset($_POST['Login']) ? $_POST['Login'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$examCode = isset($_POST['ExamCode']) ? $_POST['ExamCode'] : '';
$machine = isset($_POST['Machine']) ? $_POST['Machine'] : '';

// Kiểm tra xem password có hợp lệ không
if (in_array($key, $check_key)) {
    // Xóa password khỏi danh sách mật khẩu hợp lệ
    $check_key = array_diff($check_key, array($key));
    // Ghi danh sách mật khẩu mới vào file key.json
    file_put_contents('key.json', json_encode(array_values($check_key)));

    // Password hợp lệ, thêm thông tin vào file.json
    $data = array(
        'Login' => $login,
        'Password' => $Password,
        'ExamCode' => $examCode,
        'Machine' => $machine
    );
    // Đọc dữ liệu từ file data.json (nếu tồn tại)
    $fileData = [];
    if (file_exists('data.json')) {
        $fileData = json_decode(file_get_contents('data.json'), true);
    }
    // Thêm dữ liệu mới vào mảng
    $fileData[] = $data;
    // Ghi dữ liệu mới vào file data.json
    file_put_contents('data.json', json_encode($fileData));

    echo json_encode(true);
} else {
    // Password không hợp lệ, trả về false
    echo json_encode(false);
}
?>
