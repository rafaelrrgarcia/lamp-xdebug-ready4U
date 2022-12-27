<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h3 {
            font-size: 1.5em;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: #fff;
            padding: 10px;
            max-width: 933px;
            margin: 0 auto;
        }
        p {
            padding: 10px;
            margin: 0 auto;
            text-align: center;
        }
        a {
            color: #333;
            text-decoration: none;
        }
        a:hover {
            color: #333;
            text-decoration: underline;
        }
    </style>
    <title>Lamp Ready4U with XDebug - by Rafael Garcia</title>
</head>
<body>
    <h3>Lamp Ready4U with XDebug - by Rafael Garcia</h3>

    <p>You can init editing this file as you want.</p>

    <h3>Apache</h3>
    <p><?php echo apache_get_version(); ?></p>

    <h3>PHP</h3>
    <?php phpinfo(); ?>
</body>
</html>