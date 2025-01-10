<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <!-- boootstrap -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="css/tampilan.css" rel="stylesheet">
	<title>Inventory Barang</title>
</head>
<body>


<!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom  ">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand">Sistem Inventaris Barang Sukanesia</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll">
              <a href="index.php">Beranda</a>
            </li>
            <li class="page-scroll">
              <a href="#login">Masuk</a>
            </li>
          
          </ul>
        </div>

 

      </div>
    </nav>	

               <!-- Header atau gambar-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/gancikaret.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="images/ganciriau.JPG" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="images/rajaampatenjoy.jpg" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        
        <span class="sr-only">Next</span>
      </a>
    </div>

   
     <!-- Login Feature Section Start -->

    <section id="login" class="section-margin" style="margin-bottom: 100pt;">
      
        <div class="row content" id="login">
      <div class="col-lg-12 danger text-center zero-panel">
        <div class="col-lg-12 zero-panel-content">
          <h1> MASUK SEBAGAI .... </h1>
        
        </div>
        <br>
        
          <a href="admin/login.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">ADMIN</button></a>
          <br><br>
           <a href="petugas/login_petugas.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">PETUGAS</button></a>
          
          
          
        
      </div>
    </div>
    </section>

     

    <!-- footer -->

<
 <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="vendor/css/js/bootstrap.min.js"></script>
</body>
</html>