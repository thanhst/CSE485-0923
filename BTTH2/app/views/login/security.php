<!DOCTYPE html>
<html>

<head>
    <title>Error</title>
    <style>
        html {
            color-scheme: light dark;
        }

        body {
            width: 35em;
            margin: auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }

        .returnBtn {
            padding: 10px;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            text-decoration: none;
        }

        .returnBtn:hover {
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <h1>Hãy kiểm tra hộp thư và nhập mã xác thực vào ô bên dưới</h1>
    <form action="<?=DOMAIN."/public/index.php?controller=user&action=checkSercurity"?>" method="post">
        <input type="input" placeholder="Mã xác thực" name="checkCode">
        <button type="submit">Check</button>
    </form>
    <p><em>Thank you from Thankxk2003.</em></p>
    <a class="returnBtn" href="<?=DOMAIN."/public/index.php?controller=user&action=login"?>">Return</a>
</body>

</html>