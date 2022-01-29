<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data petugas</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas = '$id'");
            foreach ($query as $row) {
        ?>
        <!-- -------------------------------------------------- -->
        <form action="?page=petugas-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id petugas yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_petugas'] ?>" class="form-control" type="hidden" name="id">
            <!-- --------------------------------------------------------------------------------------------------------- -->
            
            <div class="form-group mt-2">
            <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Jabatan</label>
                <select class="form-control" name="jabatan">
                    <option value="<?php echo $row['jabatan'] ?>"><?php echo $row['jabatan'] ?></option>
                    <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                    <option value="Pustakawan">Pustakawan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Nomor Telepon</label>
                <input value="<?php echo $row['nomor_telepon'] ?>" class="form-control" type="text" name="nomor_telepon" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="">Username</label>
                <input value="<?php echo $row['username'] ?>" class="form-control" type="text" name="username">
            </div>
            <div class="form-group mt-2">
                <label for="">Password</label>
                <input value="<?php echo $row['password'] ?>" class="form-control" type="password" name="password">
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>