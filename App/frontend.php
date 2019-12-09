<?php
class Frontend extends Database 
{
    public function index($urutan)
    {
        $blog = mysqli_query($this->koneksi,
                            "SELECT artikel.id, artikel.judul,artikel.konten,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.slug as slug_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori 
                            on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user) ORDER BY artikel.id $urutan
                            ");
        return $blog;
    }
    public function query($query){
        $result = mysqli_query($this->koneksi, $query);
        $rows =[];
        while($row = mysqli_fetch_assoc($result)){
            $rows []= $row;
        }
        return $rows;
    }
    public function show($id)
    {
        $blog = mysqli_query($this->koneksi,
                            "SELECT artikel.id,artikel.konten, artikel.judul,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)
                            WHERE artikel.id ='$id'                        
                            ");
        return $blog;
    }
    public function kategori($id)
    {
        $blog = mysqli_query($this->koneksi,
                            "SELECT artikel.id,artikel.konten, artikel.judul,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)
                            WHERE artikel.id_kategori ='$id'                        
                            ");
        return $blog;
    }
    public function cari($keyword, $awaldata, $jumlahdataperhal){
	
        $query ="SELECT  artikel.id,artikel.konten, artikel.judul,artikel.slug,artikel.foto,artikel.tgl_dibuat,kategori.id as id_kategori,kategori.nama as nama_kategori, users.nama as penulis FROM ((artikel JOIN kategori on kategori.id = artikel.id_kategori) JOIN users on users.id = artikel.id_user)
        WHERE artikel.judul LIKE '%$keyword%' OR 
        artikel.tgl_dibuat LIKE '%$keyword%' OR 
        kategori.nama LIKE '%$keyword%' OR 
        users.nama LIKE '%$keyword%' LIMIT $awaldata, $jumlahdataperhal
    
        ";
        return $this->query($query);
    }
}

?>