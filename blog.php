<!DOCTYPE html>
<html lang="zxx">

<?php 
include 'assets/view/blog-head.php';
include "App/koneksi.php";
$blog = new Frontend();
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
                <a href="./index.html"><img src="assets/template/yummy/img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li class="active"><a href="#">Blog</a></li>
                        <li><a href="about.html">About</a></li>

                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
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
                $jumlahdataperhal=9;
                if (isset($_GET["pages"])) {
                    $halaktiv = $_GET["pages"];
                }else {
                    $halaktiv = 1;
                }
                $awaldata= ($jumlahdataperhal * $halaktiv)-$jumlahdataperhal;
                $jd=count($blog->query("SELECT * FROM artikel"));
                $artikel = $blog->index("desc LIMIT $awaldata, $jumlahdataperhal");
                $jumlahhal = ceil($jd / $jumlahdataperhal);
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
include 'assets/view/blog-footer.php'
?>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <?php 
include 'assets/view/blog-js.php'
?>
</body>

</html>