<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm từ dài nhất - Nhập từ bàn phím</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        .container { max-width: 500px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        input[type="text"] { width: 100%; padding: 10px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #2196F3; color: white; border: none; cursor: pointer; }
        .ket-qua { margin-top: 20px; padding: 10px; background: #e7f3fe; border-left: 6px solid #2196F3; }
    </style>
</head>
<body>

<div class="container">
    <h3>Nhập chuỗi để tìm từ dài nhất</h3>
    <form method="POST" action="">
        <input type="text" name="chuoi_nhap" placeholder="Ví dụ: TRUONG DAI HOC BAC LIEU" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 1. Lấy dữ liệu từ ô input
        $s = $_POST['chuoi_nhap'];
        
        // 2. Tách chuỗi thành mảng
        $mang_tu = explode(" ", $s);
        
        $tu_dai_nhat = "";
        $do_dai_max = 0;

        // 3. Xử lý tìm từ dài nhất
        foreach ($mang_tu as $tu) {
            $chieu_dai = mb_strlen($tu, 'UTF-8');
            if ($chieu_dai > $do_dai_max) {
                $do_dai_max = $chieu_dai;
                $tu_dai_nhat = $tu;
            }
        }

        // 4. Hiển thị kết quả
        echo "<div class='ket-qua'>";
        echo "<b>Chuỗi đã nhập:</b> $s <br>";
        echo "<b>Từ dài nhất:</b> \"$tu_dai_nhat\" ($do_dai_max kí tự)";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>