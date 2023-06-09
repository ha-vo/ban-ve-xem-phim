<!doctype html>
<html lang="en">
<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <!-- font awesomes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md bg-light">
        <div class="container-fluid pb-2" id="navContainer">
          <a href="trangchu.php" class="navbar-brand">
            <img src="../img/logo.jpg" alt="" height="80px" width="500px">
          </a>
          <div class="collapse navbar-collapse row" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto col">
              <?php if(isset($_COOKIE["username"]) && $_COOKIE["username"] == "admin"):?>
              <li class="nav-item">
                <a class="nav-link text-dark" href="quanly.php">Quản lý phim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="themphim.php">Thêm phim</a>
              </li>
              <?php endif?>
              </ul>
              <div class="col">
                <?php if(!isset($_COOKIE["username"])):?>
                <a href="dangky.php" class="btn btn-outline-dark m-2" id="signin">Đăng&nbspký</a>
                <a href="dangnhap.php" class="btn btn-dark m-2" id="login">Đăng&nbspNhập</a>
                <?php else:?>
                  
                  <div class="nav-item dropdown">
                  <a class="nav-link  text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="float:right">
                  <b class="m-2 "> <?=htmlspecialchars($_COOKIE["username"])?></b> <img src="../img/avt1.png" alt="" style="width:40px; height:40px; float:right" class="rounded"></a>                 
                
                  <a href="cart.php" class="text-dark"><i class="fa fa-shopping-cart mt-2" style="float:right;font-size:30px"></i></a>
                  
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" id="logout">Đăng xuất</a></li>
                  </ul>
                  </div>
                <?php endif ?>
              </div>
          </div>
        </div>
    </nav>
    
  </header>

  <script type="text/javascript" src="../../libraries/jquery-3.6.4.js"></script>
  <script type="text/javascript" src="../../libraries/jquery.cookie.min.js"></script>
  <script>
    $("document").ready(function(){
      $("#logout").click(function (){
       $.ajax({
        type: "POST",
        url:"logout.php",
        success: function(response) {
					console.log(response);
        }
       }).done(function(){
        location.reload();
      })
        //location.reload();
      })
    })
  </script>