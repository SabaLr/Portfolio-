<?php
include 'db.php';
require 'session.php';
Session::start();

$select = $db->query("SELECT dashboard_id, name, description, image FROM dashboard");
$items = $select->fetchAll();


if($_SERVER['REQUEST_METHOD'] == "GET"){ 

    /** Traitement Table DetailProject */
    try{
        if(isset($_GET['id_item'])){
            $id_item = (int)($_GET['id_item']);
            $query = "DELETE FROM dashboard WHERE dashboard_id = $id_item";
            $select = $db->query($query);
            if(!empty($select)){
                header('Location:dashboard.php');
                $msg = "supp success";
            } else {
                $msg="Error delete";
            }
        }
    }catch(Exception $e){
        $msg ='Exception delete';
    }

    /***************** */

    
   
}else{
$msg ='Erreur POST';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" href="../img/logos/logo-1.png">
    <title>Dashboard</title>

    <style>
    .btn {
        background-color: #B29FD7;
        border-color: #B29FD7;
    }
    </style>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h4>Dashboard</h4>
            <a href="../index.php">Logout</a>
        </nav>
    </div>

    <button type="button" class="btn mb-5 ml-5"><a href="add.php">Add project</a></button>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Project</td>
                <td>Description</td>
                <td>Image</td>
                <td><a href="#">Delete</a></td>
            </tr>
        </tbody>
    </table>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>