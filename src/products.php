<?php
require('classes/DB.php');
// require('classes/edit.php');
$sql = DB::getInstance()->prepare("SELECT * FROM product");
$gd =$sql->execute();
$fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);

// if(isset($_POST['edit'])){
//   $id= $_POST['id_pro'];
//   $name= $_POST['name_pro'];
//   $price= $_POST['price_pro'];
//   $category= $_POST['cat_pro'];
//   echo $id,$name;


//   // $edi = new edit($id,$name,$price,$category);
//   // $edi -> update();
// }




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

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
            <a class="nav-link" href="#">
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

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
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

      <form class="row row-cols-lg-auto g-3 align-items-center">
        <div class="col-12">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Search</label>
          <div class="input-group">
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter id,name...">
          </div>
        </div>
      
        
      
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <div class="col-12">
          <a class="btn btn-success" href="add-product.php
          ">Add Product</a>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <!-- <th scope="col">#</th> -->
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){ 
            ?>
            <form method="POST" action="delete.php" ><tr>
            <td><?php echo $v['id'] ?></td>
            <td><?php echo $v['name'] ?></td>
            <td><?php echo $v['price'] ?></td>
            <td><?php echo $v['category'] ?></td>
            <input type="hidden" name="id_pro" value="<?php echo $v['id'] ?>">
            <input type="hidden" name="name_pro" value="<?php echo $v['name'] ?>">
            <input type="hidden" name="price_pro" value="<?php echo $v['price'] ?>">
            <input type="hidden" name="cat_pro" value="<?php echo $v['category'] ?>">
            <td>
              <button type="submit" name="edit" value="<?php $v['id'] ?>">Edit</button>
              <button type="submit" name="delete" value="<?php $v['id'] ?>">Delete</button>
            </td>
              <tr>
              </form>
            <?php } ?>
          </tbody>







          <!-- <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td><a href="#">Edit</a>&nbsp;<a href="#">Delete</a></td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td><a href="#">Edit</a>&nbsp;<a href="#">Delete</a></td>
            </tr>
          </tbody> -->
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<!-- $html .='<form method="POST"><tr>
                <td>'.$v['id'].'</td>
                <td>'.$v['name'].'</td>
                <td>'.$v['price'].'</td>
                <td>'.$v['category'].'</td>
                <td> <a href="" data-pid="'.$v['id'].'"> Edit</a>/<a href="" data-pid="'.$v['id'].'">Delete</a></td>

            </form>';
          }
          $html .="";
          echo $html; -->