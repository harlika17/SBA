<?php
include('cekdokter.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
                <?php
                $nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
                ?> 
                <div class="pull-left">
                <p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li></i></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin-top:60px"> 

<div class="page-header">
    <h1>Forum Sehat<small>  Halaman utama  </small></h1>
</div>

<!-- Blog Layout - START -->
<div class="row wrap">
    <div class="col-sm-3">
        <div class="row">
            <div class="col-xs-12">
                <h2>Forum Terbaru</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">News</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    </div>
                    <div class="text-center">
                        <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    </div>
                </div>
                <hr />
                <div class="panel panel-default">
                    <div class="panel-heading">News</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    </div>
                    <div class="text-center">
                        <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    </div>
                </div>
                <hr />
                <div class="panel panel-default">
                    <div class="panel-heading">News</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    </div>
                    <div class="text-center">
                        <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-xs-12">
                <h2>Judul Diskusi</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                </p>
                <div class="text-center">
                    <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    <a href="#"><span class="glyphicon glyphicon-comment"></span> 12 Comments</a>
                    <a href="#"><span class="glyphicon glyphicon-share"></span> 11 Shares</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-xs-12">
                <h2>Judul Diskusi</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                </p>
                <div class="text-center">
                    <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    <a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a>
                    <a href="#"><span class="glyphicon glyphicon-share"></span> 211 Shares</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-xs-12">
                <h2>Judul Diskusi</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                </p>
                <div class="text-center">
                    <a href="#"><span class="glyphicon glyphicon-plus"></span> Baca selengkapnya</a>
                    <a href="#"><span class="glyphicon glyphicon-comment"></span> 7 Comments</a>
                    <a href="#"><span class="glyphicon glyphicon-share"></span> 67 Shares</a>
                </div>
            </div>
        </div>
        <hr />
    </div>
</div>
<!-- Blog Layout - END -->
<footer>
        <p>Copyright &copy; Forum Sehat 2016</p>
    </footer>
</div>            
</body>
</html>