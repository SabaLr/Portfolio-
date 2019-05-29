<?php include 'Admin/db.php'; ?>
<?php
    require 'Admin/session.php';
    Session::start();
    /**Traitement du formulaire */


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        try{
            if(isset($_POST['user_name']) && isset($_POST['password'])){
                $user_name = $db->quote($_POST['user_name']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from login where user_name = $user_name and password = $password");

                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:Admin/dashboard.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }

    }
    else{
        // echo('Erreur GET');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" href="img/logos/logo-1.png">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="body">
    <form class="box" action="404.php" method="POST" data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="" value="Login">
    </form>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init();
    </script>


</body>

</html>