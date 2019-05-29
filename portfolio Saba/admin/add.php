<?php 
include 'db.php';
require 'session.php';
Session::start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['name']) && isset($_POST['image']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['categorie'])){
                $name = $db->quote($_POST['name']);
                $image = $db->quote($_POST['image']);
                $description = $db->quote($_POST['description']);
                $categorie = $db->quote($_POST['categorie']);
                $price = (int)$_POST['price'];
                $query = "INSERT INTO all_items(name, description, price, categorie, image) VALUES ($name,$description,$price,$categorie,$image)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:dashboard.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
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
    <title>Add project</title>
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <div class="container">
        <form action="#" method="POST" class="mt-5">
            <div class="form-col">
                <div class="form-group col-md-6">
                    <label class="input" for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-2">
                    <label class="input" for="inputDesc">Description</label>
                    <textarea name="description" rows="4" cols="60" placeholder="Description"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <p class="input">Image</p>
                    <input type="file" id="import" name="image" placeholder="Import an image">
                </div>
                <button type="submit" class="btn btn-danger">Add item</button>
            </div>
        </form>
    </div>

</body>

</html>