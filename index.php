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
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.php"><img src="assets/template/yummy/img/logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
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

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
                <!-- post -->
                <?php
                $no=0;
                foreach ($blog->index('asc') as $datab) {
                    $data[$no++] = $datab;
                }
                $no=0;
                foreach ($blog->index('desc') as $datat) {
                    $datata[$no++] = $datat;
                }
                 $date=date_create($datab['tgl_dibuat']);
                 ?>
                <!-- /post -->
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <a href="detail-blog.php?id=<?=$data[0]['id']?>">
                            <div class="pt-recipe-img set-bg" data-setbg="/admin/artikel/img/<?=$data[0]['foto']?>">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        <div class="pt-recipe-text">
                            <span><?=date_format($date,"F d, Y")?></span>
                            <a href="detail-blog.php?id=<?=$data[0]['id']?>">
                                <h3><?=$data[0]['judul']?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <?php
                        for ($j=1; $j <3; $j++) { 
                           ?>
                    <div class="pt-recipe-item">
                        <a href="detail-blog.php?id=<?=$data[$j]['id']?>">
                            <div class="pt-recipe-img set-bg" data-setbg="/admin/artikel/img/<?=$data[$j]['foto']?>">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="pt-recipe-text">
                                <h4><?=$data[$j]['judul']?></h4>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                        ?>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <?php
                        for ($j=3; $j <5; $j++) { 
                           ?>
                    <div class="pt-recipe-item">
                        <a href="detail-blog.php?id=<?=$data[$j]['id']?>">
                            <div class="pt-recipe-img set-bg" data-setbg="/admin/artikel/img/<?=$data[$j]['foto']?>">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="pt-recipe-text">
                                <h4><?=$data[$j]['judul']?></h4>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Top Recipe Section End -->

    <!-- Top Recipe Section Begin -->
    <section class="top-recipe spad">
        <div class="section-title">
            <h5>Terbaru</h5>
        </div>
        <div class="container po-relative">

            <div class="row">
                <div class="col-lg-6">
                    <div class="top-recipe-item large-item">
                        <a href="detail-blog.php?id=<?=$datata[0]['id']?>">
                            <div class="top-recipe-img set-bg" data-setbg="/admin/artikel/img/<?=$datata[0]['foto']?>">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        <div class="top-recipe-text">
                            <a href=" categories.php?id=<?=$datata[0]['nama_kategori']?>">
                                <div class="cat-name"><?=$datata[0]['nama_kategori']?></div>
                            </a>
                            <a href="detail-blog.php?id=<?=$datata[0]['id']?>">
                                <h4><?=$datata[0]['judul']?></h4>
                            </a>
                            <p><?php echo substr($datata[0]['konten'],0,150)?>...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php for ($i=1; $i<5 ; $i++) { 
                        ?>

                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="detail-blog.php?id=<?=$datata[$i]['id']?>">
                                    <div class="top-recipe-img set-bg"
                                        data-setbg="/admin/artikel/img/<?=$datata[$i]['foto']?>">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <a href=" categories.php?id=<?=$datata[$i]['nama_kategori']?>">
                                        <div class="cat-name"><?=$datata[$i]['nama_kategori']?></div>
                                    </a>
                                    <a href="detail-blog.php?id=<?=$datata[$i]['id']?>">
                                        <h4><?=$datata[$i]['judul']?></h4>
                                    </a>
                                    <p><?= substr($datata[$i]['konten'],0,150)?>...</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Recipe Section End -->


    <?php 
include 'assets/view/blog-footer.php';
include 'assets/view/blog-search.php';

?>

    <?php 
include 'assets/view/blog-js.php'
?>
</body>

</html>