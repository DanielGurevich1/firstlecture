<?php require __DIR__.'/bootstrap.php';

//jau prisijungusio vart scenarijus

if ($_SESSION['login']) && !==$_SESSION['login']) {
    # code...
}

//post metodo scenarijus
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $users = file_get_contents(__DIR__.'/user.json');
    $users = json_decode($users, 1);

    $postName = $_POST['name'] ?? '';
    $postPass = $_POST['pass'] ?? '';
    
    foreach ($users as $user) {
        if ($postName == $user['name']) { // turim useri
            if (password_verify('$postPass', $user['pass'])) { // tiktinam pass input
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                header('Location: '.URL.'private.php');
                die;
            }
        }
    }
    $_SESSION['msg'] = 'Password or Name is invalid.';
    header('Location: '.URL.'/login.php');
    die;
}

//logout scenarijus
if (isset($_GET['logout'])) {
    // 1 variantas
    $_SESSION['login'] = 0;
               unset($_SESSION['user']);  
               // 2 var
               session_destroy();
               header('Location: '.URL.'/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body> 
    <h1>Login page</h1>
    <?php if(isset($_SESSION[''])) : ?>
        <h3 style="color:red"><?=$_SESSION['msg'] ?></h3>
        <?php unset($_SESSION['msg'] )?>
        <?php endif ?>
    <form action=""<?= URL?>" method="post">
NAME: <input type="text" name="name">
PASSWORD: <input type="password" name="pass">
<button type="submit">Login</button>

    </form>
</body>
</html>