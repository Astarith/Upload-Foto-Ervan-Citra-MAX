<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){

    // ambil data dari formulir
    if($_POST['aksi'] == 'add'){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $jurusan = $_POST['jurusan'];
    
    // Format tanggal sesuai dengan format MySQL (YYYY-MM-DD)  
    $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));

    $sql = "INSERT INTO pendaftaran (nama, tanggal, jenis_kelamin, agama,alamat,desa,kecamatan,kota,
    provinsi,kode_pos,no_telepon,email,sekolah_asal,jurusan)
     VALUE ('$nama', '$tanggal', '$jk', '$agama','$alamat','$desa','$kecamatan','$kota',
     '$provinsi','$kode_pos','$no_telepon','$email','$sekolah_asal','$jurusan')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

    }else if($_POST['aksi'] == 'edit'){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $desa = $_POST['desa'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $kode_pos = $_POST['kode_pos'];
        $no_telepon = $_POST['no_telepon'];
        $email = $_POST['email'];
        $sekolah_asal = $_POST['sekolah_asal'];
        $jurusan = $_POST['jurusan'];
    
        // Format tanggal sesuai dengan format MySQL (YYYY-MM-DD)  
        $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));
    
        // buat query
        $sql ="UPDATE pendaftaran SET nama='$nama', tanggal='$tanggal', jenis_kelamin='$jk', agama='$agama',alamat='$alamat',
        desa='$desa',kecamatan='$kecamatan',kota='$kota',provinsi='$provinsi',kode_pos='$kode_pos',
        no_telepon='$no_telepon',email='$email',sekolah_asal='$sekolah_asal',jurusan='$jurusan' 
        WHERE id='$id'";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: index.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    }
}
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];

    $sql = "DELETE FROM pendaftaran WHERE id ='$id';";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
?>