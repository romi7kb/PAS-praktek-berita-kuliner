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
                        <li class="active"><a href="#">Categories</a></li>
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
    <!-- Recipe Section Begin -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="filter-item">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <?php 
                                foreach ($blog->query("SELECT * FROM kategori ") as $data) {
                                ?>
                            <li data-filter=".<?=$data['slug']?>"><?=$data['nama']?></li>
                            <?php
                                }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cf-filter" id="category-filter">
                <?php 
                        
                        $artikel = $blog->index("desc");
                        foreach ($artikel as $data) 
                        {
                        ?>
                <div class="cf-item mix all <?=$data['slug_kategori']?>">
                    <div class="cf-item-pic">
                        <a href="detail-blog.php?id=<?=$data['id']?>">
                            <img src="admin/artikel/img/<?=$data['foto']?>" Width="100" height="150" alt="">
                        </a>
                    </div>
                    <div class="cf-item-text">
                        <a href="detail-blog.php?id=<?=$data['id']?>">
                            <h5><?= substr($data['judul'],0,20)?></h5>
                        </a>
                    </div>
                </div>
                <?php
                                } ?>
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->

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