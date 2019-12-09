<?php
include '../../App/koneksi.php';
$artikel = new Artikel();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tgl_dibuat = date('Y-m-d');
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["judul"])));
    $id_kategori = $_POST['id_kategori'];
    $id_user = $_POST['id_user'];

    if ($_FILES['foto']['error']==4) {
        $foto = $_POST['foto_lama'];
    }else {
        function upload()
    {
        // Upload Foto
        $foto = $_FILES['foto']['name'];
        $sizeFoto = $_FILES['foto']['size'];
        $tmpFoto = $_FILES['foto']['tmp_name'];
        
        // ekstensi
        $ekstensi = ["jpg", "jpeg", "png"];
        $ekstensiFoto = explode('.', $foto);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
        if ($sizeFoto === 0) {
            echo "<script>
        alert('Maaf file yang anda masukan terlalu besar!');
        window.location = 'index.php';
        </script>";
        exit;
        }
        if (!in_array($ekstensiFoto, $ekstensi)) {
            echo "<script>
        alert('Maaf file yang masukan bukan sebuah foto!');
        window.location = 'index.php';
        </script>";
        exit;
    }
        // mengubah nama foto
        $namaFoto = uniqid();
        $namaFoto .= ".";
        $namaFoto .= $ekstensiFoto;
        move_uploaded_file($tmpFoto, 'img/' . $namaFoto);
        return $namaFoto;
    }
        $foto = upload();
    }
}

if ($aksi == "create") {
    $artikel->create($judul, $konten, $foto, $tgl_dibuat, $slug, $id_kategori, $id_user);
} elseif ($aksi == "update") {
    $artikel->update($id, $judul, $konten, $foto, $tgl_dibuat, $slug, $id_kategori, $id_user);
} elseif ($aksi == "delete") {
    $artikel->delete($_GET['id']);
}
echo "<script>
            window.location = 'index.php';
        </script>";
?>