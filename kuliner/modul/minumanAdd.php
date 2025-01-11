<?php
if (isset($_POST['submit'])) {
    $nama_minuman = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];

    $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES ('$nama_minuman', '$daerah_minuman')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=minuman';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!'); window.location='?page=minuman';</script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                <div class="card-header" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                    <h5 class="m-0" style="color: black;">Tambah Data Daftar Minuman</h5>
                </div>
                <div class="card-body" style="background-color: #f8e6e9;">
                    <form method="post" action="">
                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label" style="color: black;">Nama Minuman</label>
                                <input type="text" class="form-control" name="nama_minuman" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label" style="color: black;">Daerah Minuman</label>
                                <input type="text" class="form-control" name="daerah_minuman" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0" style="width: 6em; height: 2.4em;">Submit</button>
                            <input class="btn btn-warning mx-2" type="reset" value="Reset" style="width: 6em; height: 2.4em;">
                            <a class="btn btn-primary" href="?page=minuman" role="button" style="width: 6em; height: 2.4em;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
