 <?php
  include_once './php/Products.php';
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Shop Homepage - Start Bootstrap Template</title>
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/shop-homepage.css" rel="stylesheet">
   <link href="css/styles.css" rel="stylesheet">
 </head>

 <body>

   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
       <a class="navbar-brand" href="#">Shop at Sight</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
             <a class="nav-link" href="./">Home
               <span class="sr-only">(current)</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">About</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Services</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Contact</a>
           </li>
         </ul>
       </div>
     </div>
   </nav>

   <!-- Page Content -->
   <div class="container">
     <div class="row">
       <div class="col-lg-3">
         <h1 class="my-4">Fakestore</h1>
         <div class="list-group">
           <a href="?category=women" class="list-group-item">Women's Clothing</a>
           <a href="?category=men" class="list-group-item">Men's Clothing</a>
           <a href="?category=jewelery" class="list-group-item">Jewelery</a>
         </div>
       </div>
       <!-- /.col-lg-3 -->

       <div class="col-lg-9">
         <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
           <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
           <?php
            Products::main();
            ?>
         </div>
         <!-- /.row -->


       </div>
       <!-- /.col-lg-9 -->

     </div>
     <!-- /.row -->

   </div>
   <!-- /.container -->

   <!-- Footer -->
   <footer class="py-5 bg-dark">
     <div class="container">
       <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
     </div>
     <!-- /.container -->
   </footer>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>