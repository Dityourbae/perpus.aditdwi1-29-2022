<!-- Proses Update -->
<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_update = mysqli_query($koneksi,"UPDATE petugas SET nama = '$nama',
                                                              jabatan = '$jabatan', 
                                                              nomor_telepon = '$nomor_telepon', 
                                                              alamat = '$alamat', 
                                                              username = '$username', 
                                                              password = '$password' 
                                                              WHERE id_petugas = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        //header('Refresh:2; URL=http://localhost/perpustakaan/admin.php?page=petugas');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>