<?php
require('classes/DB.php');
global $id;
$id = $_POST['id_pro'];
echo $id;
echo $_POST['edit_this'];
// if(isset($_POST['edit_this'])){
//     // $id= $_POST['id_pro'];
//     $name= $_POST['name_pro'];
//     $price= $_POST['price_pro'];
//     $category= $_POST['cat_pro'];
// }
// echo $id;
    // header('location:edit.php');
if(isset($_POST['edit_this'])){
    // echo $id;
    print_r($_POST);
    $id = $_POST['id_pro'];
    echo $id;
    $up_name = $_POST['name'];
    $up_price = $_POST['price'];
    $up_cat = $_POST['category'];
    // echo $id,$up_name;

    // UPDATE product
    // SET name = $up_name, price = $up_price, category = $up_cat
    // WHERE id = $id
    // $sql = DB::getInstance()->prepare("UPDATE 'product' SET 'name' = $up_name, 'price'= $up_price, 'category' = $up_cat WHERE 'id' = $id ;");
    // $sql->execute();
    // $sql -> setFetchMode(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="" method="POST">

    <input type="text" name="id" value="<?php $_POST['id_pro'] ?>">
  <div class="form-group">
    <label for="exampleInputEmail1"> Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">price</label>
    <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="price" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" name="category"  class="form-control" id="exampleInputPassword1" >
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" name="edit_this" class="btn btn-primary">Submit</button>
</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>