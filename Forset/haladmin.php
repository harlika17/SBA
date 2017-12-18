<?php
include('cekadmin.php');
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

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family:Comic Sans MS;font-size:16px;">
            <ul class="nav navbar-nav navbar-right">
                <li></i></li>
				<li><a href="/database/index.php"><i class="glyphicon glyphicon-list"></i> Database</a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin-top:60px"> 


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><span class="glyphicon glyphicon-info-sign btn-lg white"></span></div>
                    <div class="info">
                        <h3 class="title">Feedback</h3>
                        <p>
                            1 Feedback terbaru.
                        </p>
                        <div class="more">
                            <a href="#" title="Title Link"><i class="fa fa-plus"></i> Lihat
                            </a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><span class="glyphicon glyphicon-envelope btn-lg white"></span></div>
                    <div class="info">
                        <h3 class="title">Pesan</h3>
                        <p>
                            1 Pesan baru belum dibaca. 
                        </p>
                        <div class="more">
                            <a href="#" title="Title Link"><i class="fa fa-plus"></i> Lihat
                            </a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><span class="glyphicon glyphicon-list btn-lg white"></span></div>
                    <div class="info">
                        <h3 class="title">Post</h3>
                        <p>
                            1 Postingan forum terbaru.
                        </p>
                        <div class="more">
                            <a href="#" title="Title Link"><i class="fa fa-plus"></i> Lihat
                            </a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </div>
</div>

<style>
.white {
    color: white;
}

.btn-lg {
    font-size: 38px;
    line-height: 1.33;
    border-radius: 6px;
}

.box > .icon {
    text-align: center;
    position: relative;
}

.box > .icon > .image {
    position: relative;
    z-index: 2;
    margin: auto;
    width: 88px;
    height: 88px;
    border: 7px solid white;
    line-height: 88px;
    border-radius: 50%;
    background: #63B76C;
    vertical-align: middle;
}

.box > .icon:hover > .image {
    border: 4px solid black;
}

.box > .icon > .image > i {
    font-size: 40px !important;
    color: #fff !important;
}

.box > .icon:hover > .image > i {
    color: white !important;
}

.box > .icon > .info {
    margin-top: -24px;
    background: rgba(0, 0, 0, 0.04);
    border: 1px solid #e0e0e0;
    padding: 15px 0 10px 0;
}

    .box > .icon > .info > h3.title {
        color: #222;
        font-weight: 500;
    }

    .box > .icon > .info > p {
        color: #666;
        line-height: 1.5em;
        margin: 20px;
    }

.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
    color: #222;
}

.box > .icon > .info > .more a {
    color: #222;
    line-height: 12px;
    text-transform: uppercase;
    text-decoration: none;
}

.box > .icon:hover > .info > .more > a {
    color: #000;
    padding: 6px 8px;
    border-bottom: 4px solid black;
}

.box .space {
    height: 30px;
}
</style>
</body>
</html>