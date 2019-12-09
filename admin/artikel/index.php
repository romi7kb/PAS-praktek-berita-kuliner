<?php
session_start();
if (!$_SESSION['login']) {
    header("location:../login.php");
} else {
    include '../../App/koneksi.php';
    $user = new Database();
    $user = mysqli_query($user->koneksi, "select * from users where password='$_SESSION[login]'");
    $user = mysqli_fetch_array($user);

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
                    <li><a href="/admin/kategori/"> <i class="icon-form"></i>Kategori </a></li>
                    <li><a href="/admin/artikel/"> <i class="fa fa-bar-chart"></i>Artikel </a></li>
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
                <li class="breadcrumb-item "><a href="">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Artikel</li>
            </ol>
        </nav>
        <!-- end breadcumb -->

        <!-- Content -->
        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Daftar Kategori
                            <a href="/admin/artikel/create.php" class="btn btn-sm btn-info float-md-right">Tambah</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $artikel = new Artikel();
                                                $no = 1;
                                                foreach ($artikel->index() as $data) {
                                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['nama_kategori']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td> <img src="/admin/artikel/img/<?php echo $data['foto']; ?>" alt=""
                                                    style="width:75px; height:50px;"></td>
                                            <td>
                                                <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin ?')">Delete</a> |
                                                <a href="show.php?id=<?php echo $data['id']; ?>"
                                                    class="btn btn-sm btn-success">Show</a> |
                                                <a href="edit.php?id=<?php echo $data['id']; ?>"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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