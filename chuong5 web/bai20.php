<?php
$msg = "";
// Xử lý khi nhấn nút Đăng nhập
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $maso = $_POST['maso'];

    // Đọc file users.ini
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $is_valid = false;

    foreach ($users as $line) {
        list($u_email, $u_pass, $u_maso) = explode('|', $line);
        if ($email == $u_email && $pass == $u_pass && $maso == $u_maso) {
            $is_valid = true;
            break;
        }
    }

    if ($is_valid) {
        // Tạo cookie tồn tại trong 3 phút (180 giây)
        setcookie("user_logged", $email, time() + 180);
        $msg = "Đăng nhập thành công! Duy trì trong 3 phút.";
    } else {
        $msg = "Thông tin đăng nhập sai hoặc không khớp!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành viên</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; padding-top: 50px; }
        .login-container { width: 320px; background: white; border: 1px solid #999; box-shadow: 2px 2px 5px rgba(0,0,0,0.2); }
        .title { background: #444; color: white; text-align: center; padding: 10px; font-weight: bold; font-size: 14px; }
        .form-content { padding: 15px; }
        .input-group { margin-bottom: 10px; display: flex; border: 1px solid #ccc; align-items: center; padding: 2px; }
        .input-group input { border: none; outline: none; padding: 8px; width: 100%; font-size: 12px; }
        .input-group span { background: #eee; padding: 8px; border-left: 1px solid #ccc; font-size: 12px; color: #666; }
        .btn { width: 100%; padding: 10px; margin-top: 5px; cursor: pointer; border: none; color: white; font-weight: bold; }
        .btn-login { background: #444; }
        .btn-reg { background: #666; }
        .error { color: red; font-size: 11px; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="login-container">
    <div class="title">Đăng nhập thành viên</div>
    <div class="form-content">
        <?php if($msg != "") echo "<div class='error'>$msg</div>"; ?>
        
        <form method="POST">
            <div class="input-group">
                <input type="text" name="email" placeholder="Email name">
                <span>@blu.edu.vn</span>
            </div>
            
            <div class="input-group">
                <input type="password" name="pass" placeholder="Password">
                <span>🔒 hiện</span>
            </div>

            <div class="input-group">
                <input type="text" name="maso" placeholder="Mã số">
                <span>||||| vạch</span>
            </div>

            <button type="submit" name="login" class="btn btn-login">Đăng nhập</button>
            <button type="button" class="btn btn-reg">Đăng ký</button>
        </form>
    </div>
</div>

</body>
</html>