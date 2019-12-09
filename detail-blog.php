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
                <a href="./index.html"><img src="/assets/template/yummy/img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="categories.php">Categories</a>

                        </li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
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

    <?php
                
                $data = mysqli_fetch_assoc($blog->show($_GET['id']));    
                $konten = explode("<p>&nbsp;</p>",$data['konten']);
                         
    ?>
    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <?php $date=date_create($data['tgl_dibuat']);?>
                    <span><?=date_format($date,"F d, Y")?></span>
                    <h2><?=$data['judul']?></h2>
                    <ul class="kategori">
                        <li><?=$data['nama_kategori']?></li>
                        <li>Detail</li>
                    </ul>
                </div>
                <center><img src="/admin/artikel/img/<?=$data['foto']?>" width="700" height="400" alt=""></center>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="/admin/artikel/img/<?=$data['foto']?>" alt="">
                            <h2><?=$data['judul']?></h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews"><br></div>
                        </div>
                        <div class="ingredient-list">
                            <div class="list-item">
                                <?php if (isset($konten[1])) {
                                ?>
                                <h5>Bahan Bahan</h5>
                                <div class="salad-list">
                                    <?=$konten[1]?>
                                </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Deskripsi</h3>
                            <?=$konten[0]?>
                        </div>
                        <div class="instruction-list">
                            <?php if (isset($konten[2])) {
                                ?>
                            <h3>Langkah Langkah</h3>
                            <?=$konten[2]?>
                            <?php
                                } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->


    <?php 
include 'assets/view/blog-footer.php';
include 'assets/view/blog-search.php';
?>


    <?php 
include 'assets/view/blog-js.php'
?>
</body>

</html>