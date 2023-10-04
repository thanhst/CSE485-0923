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
    <h1>Thư đã được gửi tới email của bạn!</h1>
    <?=$contentText?>
    <p><em>Thank you from Thankxk2003.</em></p>
    <a class="returnBtn" href="<?=DOMAIN."/public/index.php?controller=user&action=login"?>">Return</a>
</body>

</html>