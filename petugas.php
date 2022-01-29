<center><h4 class="mt-4 mb-3">Data Anggota</h4></center>
<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
</button>
<!-- =========================================================================================== -->
<table class="table table-dark">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>No Telefon</th>
        <th>Alamat</th>
        <th>--Action--</th>
    </tr>
    <?php
    //Query Join 3 tabel///////////////////////////////////
        //$querybaru = mysqli_query($koneksi,"SELECT anggota.id_anggota, anggota.nis, anggota.nama, anggota.id_kelas, 
        //anggota.id_jurusan, anggota.tempat_lahir, anggota.tgl_lahir, anggota.no_telp,
        //anggota.alamat, anggota.jk, kelas.nama_kelas, jurusan.nama_jurusan
        //FROM anggota
        //JOIN kelas ON anggota.id_kelas = kelas.id_kelas
        //JOIN jurusan ON anggota.id_jurusan = jurusan.id_jurusan");
        //End of query Join tabel//////////////////////////////////////////////////////
        $query = mysqli_query($koneksi,"SELECT * FROM petugas");
        $no = 1;
        foreach ($query as $row) {
    ?>
    <tr>
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td valign="middle"><?php echo $row['nama']; ?></td>
        <td valign="middle"><?php echo $row['jabatan']; ?></td>
        <td valign="middle"><?php echo $row['nomor_telepon']; ?></td>
        <td valign="middle"><?php echo $row['alamat']; ?></td>
        <td>
        <a href="?page=petugas-delete&delete&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger"><i class="fas fa-trash-alt">Hapus</i></button>
            </a>
        <a  href="?page=petugas-edit&edit&id=<?php echo $row['id_petugas'];?>">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-modal"><i class="fas fa-edit">Edit</i></button>
           </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<!-- ============================================================================ -->


<!-- Modal Input Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <!-- Form Input Anggota ======================================================= -->
            <form action="?page=petugas-insert" method="post">
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Petugas" required="">
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="jabatan" required="">
                        <option value="">---Pilih Jabatan---</option>
                       <?php
                        $query_jabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
                        foreach ($query_jabatan as $jabatan){
                       ?>
                       <option value="<?php echo $jabatan['nama_jabatan']?>"><?php echo $jabatan['nama_jabatan'] ?></option>
                       <?php
                       }
                       ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nomor_telepon" placeholder="Isi Nomer Telefon Aktif" required="">
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="alamat" placeholder="Isi Alamat" required="">
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" name="username" placeholder="isi usernama"  required="">
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" name="password" placeholder="isi password" required="">
                </div>
    
        <!-- ====================================================================================== -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-success mt-2" type="submit" name="simpanpetugas">Simpan</button>
        </div>
            <!-- tag tutup formnya pinda ke sini -->
            </form>
            <!-- ================================================================================= -->
        </div>
    </div>
</div>
<!-- End of modal input data -->


<!-- Modal Edit Data -->

