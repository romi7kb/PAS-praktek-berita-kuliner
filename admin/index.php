<?php
session_start();
if (!$_SESSION['login']) {
    echo "<script type='text/javascript'>
        alert('Maaf anda harus login terlebih dahulu!');
            window.location = '../../login.php'
        </script>";
} else {
    include '../App/koneksi.php';
    $user = new Database();
    $user = mysqli_query($user->koneksi, "select * from users where password='$_SESSION[login]'");
    $user = mysqli_fetch_array($user);    
    ?>
<!DOCTYPE html>
<html>

<?php
include '../assets/view/head.php';
?>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <?php
            include '../assets/view/sidebar-header.php';
            ?>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li><a href="/admin"> <i class="icon-home fa "></i>Home </a></li>
                    <li><a href="/admin/kategori/"> <i class="icon-form"></i>Kategori </a></li>
                    <li><a href="/admin/artikel/"> <i class="icon-form"></i>Artikel </a></li>
                </ul>
            </div>
            <div class="admin-menu">

            </div>
        </div>
    </nav>
    <div class="page">
        <?php
            include '../assets/view/navbar.php';
            ?>
        <?php
            include '../assets/view/footer.php';
            ?>
    </div>
    <?php
            include '../assets/view/js.php';
            ?>
</body>

</html>
<?php }  ?>