<?php
phpinfo();
//validation
$errors = [];
if(empty($_POST['age'])){
    $errors['age'] = 'required';
}
if(!empty($errors))
{
    header("Location:http://localhost/PHP/?error=true");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php define('WEBSITE', 'yasmina'); ?></div>
    <div><?= $_SERVER['SERVER_NAME']; ?></div>
    <div><?= $_SERVER['REQUEST_URI']; ?></div>
    <div><?= $_SERVER['HTTP_CLIENT_IP']; ?></div>
    <div><?= filename($_SERVER["REQUEST_URI"], ".php") ?></div>
    <div><?php
        switch ($_POST['age']) {
            case '5':
                echo "Go to kindergarden";
                break;
            case 1:
                echo "i equals 1";
                break;
            case 2:
                echo "i equals 2";
                break;
            default:
            if ($_POST['age'] > 6 && $_POST['age'] < 12) { 
                echo "Go to grade : $_POST['age']";
              } else if ($_POST['age'] < 5) { 
                echo "Stay at home";
              }
        }
        ?></div>
    
</body>
</html>