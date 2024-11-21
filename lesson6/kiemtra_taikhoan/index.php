<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra tài khoản</title>
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
        <h1>Kiểm tra tài khoản</h1>
        <form action="" method="post">
            <label for="name">Nhập vào tài khoản:</label>
            <input type="text" id="name" name="name" placeholder="Nhập tài khoản" required>
            <button type="submit">Kiểm tra</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Kiểm tra sự tồn tại của key "name"
            $name = $_POST["name"] ?? "";

            // Hàm kiểm tra tên tài khoản
            function validateName($name)
            {
                if (!is_string($name) || empty($name)) {
                    return false; // Trả về false nếu $name không hợp lệ
                }

                $pattern = "/^[_a-z0-9]{6,}$/";
                return preg_match($pattern, $name) ? true : false;
            }

            // Kết quả kiểm tra
            if (validateName($name)) {
                echo "<p class='result' style='color:green;'>Tài khoản \"$name\" là hợp lệ </p>";
            } else {
                echo "<p class='result' style='color:red;'>Tài khoản \"$name\" không hợp lệ </p>";
            }
        }
        ?>
    </div>
</body>

</html>