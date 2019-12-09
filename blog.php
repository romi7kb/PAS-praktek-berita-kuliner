<!DOCTYPE html>
<html lang="zxx">

<?php 
session_start();
include 'assets/view/blog-head.php';
include "App/koneksi.php";
$blog = new Frontend();
$jumlahdataperhal=9;
                if (isset($_GET["pages"])) {
                    $halaktiv = $_GET["pages"];
                }else {
                    $halaktiv = 1;
                }
                $awaldata= ($jumlahdataperhal * $halaktiv)-$jumlahdataperhal;
                if (isset($_GET["close"])) {
                    $_SESSION["keyword"]=false;
                }
                if (isset($_POST["cari"])) {
                    $_SESSION["keyword"]=$_POST["keyword"];
                    $keyword=$_POST["keyword"];	
                    $artikel = $blog->cari($_POST["keyword"], $awaldata, $jumlahdataperhal);
                    $jd=count($blog->query("SELECT  artikel.id,artikel.konten, artikel.judul,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)
                    WHERE artikel.judul LIKE '%$keyword%' OR 
                    artikel.tgl_dibuat LIKE '%$keyword%' OR 
                    kategori.nama LIKE '%$keyword%' OR 
                    users.nama LIKE '%$keyword%' LIMIT $awaldata, $jumlahdataperhal
                    "));
                } 
                elseif (isset($_SESSION["keyword"])) {
                    $keyword=$_SESSION["keyword"];
                    $artikel = $blog->cari($_SESSION["keyword"], $awaldata, $jumlahdataperhal);
                    $jd=count($blog->query("SELECT  artikel.id,artikel.konten, artikel.judul,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)
                    WHERE artikel.judul LIKE '%$keyword%' OR 
                    artikel.tgl_dibuat LIKE '%$keyword%' OR 
                    kategori.nama LIKE '%$keyword%' OR 
                    users.nama LIKE '%$keyword%' LIMIT $awaldata, $jumlahdataperhal
                    "));
                }else {
                    $jd=count($blog->query("SELECT * FROM artikel"));
                    $artikel = $blog->index("desc LIMIT $awaldata, $jumlahdataperhal");
                }
                $jumlahhal = ceil($jd / $jumlahdataperhal);
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.php"><img src="assets/template/yummy/img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li class="active"><a href="#">Blog</a></li>
                        <li><a href="about.php">About</a></li>

                    </ul>
                </nav>
                <?php 
                if ($_SESSION['keyword']==true) {
                    ?>
                <div class="nav-right">
                    <div class="logo">
                        <a href="?close=true"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <?php
                }else {
                    ?>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <?php
                }?>

            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Recipe Section Begin -->
    <section class="recipe-section spad">
        <div class="container">
            <div class="row">
                <?php 
                
                foreach ($artikel as $data) 
                {
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="recipe-item">
                        <a href="detail-blog.php?id=<?=$data['id']?>"><img src="admin/artikel/img/<?=$data['foto']?>"
                                Width="80" height="300" alt=""></a>
                        <div class="ri-text">
                            <div class="cat-name"><?=$data['nama_kategori']?></div>
                            <a href="detail-blog.php?id=<?=$data['id']?>">
                                <h4><?=$data['judul']?></h4>
                            </a>
                            <p><?php echo substr($data['konten'],0,150)?>...</p>
                        </div>
                    </div>
                </div>
                <?php
                        } ?>
                <!--navigasi-->

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recipe-pagination">
                        <?php if($halaktiv >1 ) : ?>
                        <a href="?pages= <?= $halaktiv-1; ?> ">Prev</a>
                        <?php endif; ?>
                        <?php  
                        for ($i=1;$i<=$jumlahhal;$i++) {
                        if($i == $halaktiv) {?>
                        <a class="active" href="?pages=<?= $i; ?> "><?= "0$i"; ?> </a>
                        <?php }else{ ?>
                        <a href="?pages=<?= $i; ?> "><?= "0$i"; ?> </a>
                        <?php } ?>
                        <?php }  ?>
                        <?php if($halaktiv < $jumlahhal ) : ?>
                        <a href="?pages= <?= $halaktiv+1; ?> ">Next</a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recipe Section End -->



    <?php 
include 'assets/view/blog-footer.php';
include 'assets/view/blog-search.php';
?>



    <?php 
include 'assets/view/blog-js.php'
?>
</body>

</html>