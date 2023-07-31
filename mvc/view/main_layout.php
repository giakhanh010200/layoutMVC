<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding:50px;
        }
        #header,#footer{
            background: red;
        }
    </style>
</head>
<body>
    <h2>This is home</h2>
    <h1>
    <?php echo $data["tong"];?>
    </h1>
    <div id="header"></div>
    <div id="content">
        <?php require_once "./mvc/view/pages/".$data["page"].".php"?>
    </div>
    <div id="footer"></div>
</body>
</html>