<?php
session_start();
if (!$_SESSION['login']) {
    header("location:../login.php");
} else {
    include '../../App/koneksi.php';
    $user = new Database();
    $user = mysqli_query($user->koneksi, "select * from users where password='$_SESSION[login]'");
    $user = mysqli_fetch_array($user);
    $artikel = new Artikel();
    $lihat = $artikel->edit($_GET['id']);
    $lihat = mysqli_fetch_array($lihat);
    ?>
<!DOCTYPE html>
<html>


<?php
include '../../assets/view/head.php';
?>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <?php
            include '../../assets/view/sidebar-header.php';
            ?>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li><a href="/admin"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="/admin/kategori"> <i class="icon-form"></i>Kategori </a></li>
                    <li><a href="/admin/artikel"> <i class="fa fa-bar-chart"></i>Artikel </a></li>
                </ul>
            </div>
            <div class="admin-menu">

            </div>
        </div>
    </nav>
    <div class="page">
        <!-- navbar-->
        <?php
            include '../../assets/view/navbar.php';
            ?>
        <!-- End Nav -->

        <!-- breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="../artikel/">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lihat Data</li>
            </ol>
        </nav>
        <!-- end breadcumb -->

        <!-- Content -->
        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Lihat Artikel
                        </div>
                        <div class="card-body">
                            <form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                <div class="form-group">
                                    <label for="">Judul : </label>
                                    <?=$lihat['judul']?>
                                </div>
                                <div class="form-group">
                                    <label for="">Konten : </label>
                                    <?=$lihat['konten']?>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Artikel</label>
                                    <img src="img/<?=$lihat['foto']?>" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Kategori Artikel : </label>
                                    <?php
                                        foreach ($artikel->get_kategori() as $data) {
                                        if ($lihat['id_kategori']==$data['id']) {         
                                         echo $data['nama'] 
                                         ?>
                                    </option>
                                    <?php }} ?>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->

        <?php
            include '../../assets/view/footer.php';
            ?>
    </div>
    <?php
            include '../../assets/view/js.php';
            ?>
</body>

</html>
<?php }  ?>