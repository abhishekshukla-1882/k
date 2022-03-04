<?php

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
session_start();

require('./classes/DB.php');
require('./classes/update.php');
if($_SESSION['login'][2]==0){
  header('Location:classes/profile.php');
}
// include('./login.php');
$sql = DB::getInstance()->prepare("SELECT * FROM user");
$gd =$sql->execute();
$fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);

// foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
//     // echo $k;
//     echo $v['password'];
// }
// if (isset($_POST['approved'])) {
//   // echo "GeeksforGeeks";
//   $pid = $_POST['id'];
  // echo $pid;
if (isset($_POST['approved'])) {
  // echo "GeeksforGeeks";
  $pid = $_POST['id'];
  // $sql = DB::getInstance()->prepare("UPDATE user SET authen=1 WHERE id=$pid");
  // $gd =$sql->execute();
  // $fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
  $vol = new update($pid);
  $vol-> update();
    // echo $pid;
    // foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
}
      // if($v['id'] == $pid ){
      //   $sql = DB::getInstance()->prepare("UPDATE user SET authen=1 WHERE id=$pid");
      //   $gd =$sql->execute();
      // }
  
//   }}
  
// }
// foreach
// $sql = "SELECT * FROM `user`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }
// $conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.html">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.html">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">password</th>
              <th scope="col">Auth</th>
              <th scope="col">Permission</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $html = "";
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
              $html .='<form method="POST"><tr>
              <td>'.$v['id'].'</td>
              <td>'.$v['username'].'</td>
              <td>'.$v['password'].'</td>
              <td>'.$v['authen'].'</td>
              <td><input type="hidden" name="id" value='.$v["id"].'><button type="submit" id="chan" value='.$v['id'].' name="approved" >Restrict</buttton></td>
            </tr></form>';
          }
          // $('table').html($html);
          $html .="";
          echo $html;
          
            ?>
          </tbody>
          
        </table>
      </div>
    </main>
  </div>

</div>
<?php 

?>
<!-- <script>
  function change(){
    pid= $_POST['pid'];
    console.log('done',pid);

  }

</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>