<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số điện thoại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            text-align: left;
        }

        label,
        input,
        button {
            display: block;
            margin-bottom: 10px;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <h1>Kiểm tra số điện thoại</h1>
        <form action="" method="post">
            <label for="phone">Nhập số điện thoại:</label>
            <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
            <button type="submit">Kiểm tra</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $phone = $_POST["phone"] ?? "";

            // Hàm kiểm tra số điện thoại
            function validatePhone($phone)
            {
                $pattern = "/^\(\d{2}\)-\(0\d{9}\)$/";
                return preg_match($pattern, $phone) ? true : false;
            }

            // Hiển thị kết quả
            if (validatePhone($phone)) {
                echo "<p class='result' style='color:green;'>Số điện thoại \"$phone\" là hợp lệ </p>";
            } else {
                echo "<p class='result' style='color:red;'>Số điện thoại \"$phone\" không hợp lệ </p>";
            }
        }
        ?>
    </div>
</body>

</html>