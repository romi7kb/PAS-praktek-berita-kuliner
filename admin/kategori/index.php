<?php
session_start();
if (!$_SESSION['login']) {
    header("location:../login.php");
} else {
    include '../../App/koneksi.php';
    $user = new Database();
    $user = mysqli_query($user->koneksi, "select * from users where password='$_SESSION[login]'");
    // var_dump($_SESSION['login']);
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
                    <li><a href="/admin/kategori/"> <i class="fa fa-bar-chart"></i>Kategori </a></li>
                    <li><a href="/admin/artikel/"> <i class="icon-form"></i>Artikel </a></li>
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
                <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Data</li>
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
                            <button type="button" class="btn btn-sm btn-info float-md-right" data-toggle="modal"
                                data-target=".kategori">Tambah</b>
                        </div>
                        <?php include 'create.php'; ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Slug</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $kategori = new Kategori();
                                                $no = 1;
                                                foreach ($kategori->index() as $data) {
                                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['slug']; ?></td>
                                            <td>
                                                <a href="/admin/kategori/proses.php?id=<?php echo $data['id']; ?>&aksi=delete"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda Yakin ?')">Delete</a> |
                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target=".kategori-<?php echo $data['id']; ?>">Edit</button>

                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <?php include 'edit.php'; ?>
                                        <!-- End Edit Modal -->
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