<?php
include('cekmember.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Member</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

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

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <a href="#">
                <img class="img-responsive" alt="Bootstrap template" src="img/Daun_Singkong_1450572466.jpg" />
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Manfaat Daun Singkong</h3>
            <h4>Dokter imah</h4>
            <p>
							Berdasarkan informasi yang diambil dari manfaatdaun.com, daun singkong mempunyai kandungan nutrisi yang terdiri dari vitamin A, vitamin B1, vitamin B6, vitamin C, magnesium, kalium, kalsium, zat besi, mangan, zinc dan lain sebagainya. Selain itu, daun singkong mempunyai kadar kalori dan lemak rendah. Di dalam 100 gram daun singkong terdapat kandungan kalori sebanyak 37 kkal dan terdapat kandungan lemak sebanyak 1,9 gram. [1]

			Tak hanya untuk mencukupi asupan nutrisi yang dibutuhkan oleh tubuh, kandungan nutrisi di dalamnya juga sangat bermanfaat untuk kesehatan tubuh. Untuk mengetahui informasi selengkapnya, berikut ini akan diberikan informasi tentang manfaat daun singkong untuk kesehatan tubuh. Inilah manfaat daun singkong untuk kesehatan tubuh yang beberapa diantaranya diakses dari manfaat.co.id.
			7 Manfaat Daun Singkong

				Membantu Proses Regenerasi Sel
				Di dalam daun singkong terdapat kandungan asam amino esensial yang berguna untuk mergenerasi sel-sel di dalam tubuh manusia. Kandungan asam amino tersebut merupakan salah satu protein yang dapat membantu memperbaiki sel-sel tubuh yang rusak sehingga dapat berfungsi kembali.
				Meningkatkan Sistem Metabolisme
				Kandungan vitamin B yang terdapat di dalam daun singkong dibutuhkan untuk membantu meningkatkan sistem metabolisme di dalam tubuh agar tetap optimal.
				Sumber Energi
				Kandungan asam amino esensial dan serat yang ada di dalam daun singkong dapat membantu memberikan sumber energi yang dibutuhkan oleh tubuh untuk beraktivitas. [1]
				Melancarkan Sirkulasi Darah
				Kandungan antioksidan dan asam amino yang terdapat di dalam daun singkong berperan untuk melancarkan sirkulasi darah yang membawa oksigen untuk diedarkan ke seluruh tubuh. Dengan demikian, semua organ-organ tubuh dapat bekerja secara optimal.
				Melancarkan Sistem Pencernaan
				Tak hanya mempunyai kemampuan untuk memberikan energi, kandungan serat yang dimiliki oleh daun singkong juga berguna untuk melancarkan sistem pencernaan sehingga organ-organ pencernaan menjadi sehat dan terbebas dari gangguan penyakit.
				Mencegah Penyakit Anemia
				Sejumlah nutrisi yang terdapat di dalam daun singkong mempunyai kemampuan untuk memproduksi sel-sel darah merah dan berperan untuk melancarkan sirkulasi darah, sehingga tubuh terbebas dari penyakit anemia atau kurang darah.
				Menangkal Radikal Bebas
				Sama seperti sayuran lainnya, daun singkong juga memiliki kandungan antioksidan yang berperan untuk menangkal radikal bebas akibat paparan sinar matahari. Dengan demikian, kulit akan terlindungi dan terbebas dari resiko terkena penyakit kanker kulit.

			Selain kaya akan kandungan nutrisi dan mempunyai banyak manfaat bagi kesehatan tubuh, daun singkong ini juga dibanderol dengan harga yang cukup murah. Dengan uang 2 ribu rupiah saja, kita sudah bisa mendapatkan daun singkong ini di pasaran. Lain halnya, jika tinggal di perdesaan karena kita bisa memetiknya di kebunnya secara langsung dengan mengantongi ijin dari pemiliknya.

			Akan tetap daun singkong tidak dianjurkan untuk dikonsumsi dalam porsi yang berlebihan, terutama untuk orang yang menderita hipertensi. Mengkonsumsi daun singkong secara berlebihan dapat meningkatkan tekanan darah atau hipertensi. Tekanan darah yang terlalu tinggi akan membuat tubuh memiliki resiko terkena penyakit jantung dan stroke. Oleh karena itu, konsumsilah daun singkong secara bijak. Apabila ingin mengkonsumsinya untuk makanan sehat, sebaiknya rebus untuk jadikanlah sebagai lalapan dan janganlah dikonsumsi bersamaan dengan santan karena akan meningkatkan resiko terkena penyakit asam urat.
            </p>
            <div class="text-center">
                <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                <a href="#"><span class="glyphicon glyphicon-thumbs-down"></span> Unlike</a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <a href="#">
                <img class="img-responsive" alt="Bootstrap template" src="http://placehold.it/600x200" />
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Sample Two</h3>
            <h4>Summary</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
                Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
                Mauris ultricies, justo eu convallis placerat, felis enim.
            </p>
            <div class="text-center">
                <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                <a href="#"><span class="glyphicon glyphicon-thumbs-down"></span> Unlike</a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <a href="#">
                <img class="img-responsive" alt="Bootstrap template" src="http://placehold.it/600x200" />
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Sample Three</h3>
            <h4>Summary</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
                Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
                Mauris ultricies, justo eu convallis placerat, felis enim.
            </p>
            <div class="text-center">
                <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                <a href="#"><span class="glyphicon glyphicon-thumbs-down"></span> Unlike</a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <a href="#">
                <img class="img-responsive" alt="Bootstrap template" src="http://placehold.it/600x200" />
            </a>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Sample Four</h3>
            <h4>Summary</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
                Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. 
                Mauris ultricies, justo eu convallis placerat, felis enim.
            </p>
            <div class="text-center">
                <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                <a href="#"><span class="glyphicon glyphicon-thumbs-down"></span> Unlike</a>
            </div>
        </div>
    </div>
	<hr />
</div>
<footer>
        <p>Copyright &copy; Forum Sehat 2016</p>
    </footer>
</div>              
</body>
</html>