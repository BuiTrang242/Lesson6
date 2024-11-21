<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        label,
        input,
        button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Kiểm tra email</h1>
        <form action="" method="POST">
            <label for="email">Nhập Email: </label>
            <input type="text" name="email" id="email" placeholder="Nhập email" required>
            <button type="submit">Kiem tra</button>
        </form>




        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];

            function validateEmail($email)
            {
                $pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$/";
                return preg_match($pattern, $email) ? true : false;
            }

            if (validateEmail($email)) {
                echo "<p class='result' style='color: green'>Email :\"$email\" là hợp lệ</p>";
            } else {
                echo "<p class='result' style='color: red'>Email :\"$email\" không hợp lệ</p>";

            }


        }
        ?>
    </div>
</body>

</html>