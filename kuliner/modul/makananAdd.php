<?php
if (isset($_POST['submit'])) {
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];

    $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES ('$nama_makanan', '$daerah_makanan')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=makanan';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!'); window.location='?page=makanan';</script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                <div class="card-header" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                    <h5 class="m-0" style="color: black;">Tambah Data Daftar Makanan</h5>
                </div>
                <div class="card-body" style="background-color: #f8e6e9;">
                    <form method="post" action="">
                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label" style="color: black;">Nama Makanan</label>
                                <input type="text" class="form-control" name="nama_makanan" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label" style="color: black;">Daerah Makanan</label>
                                <input type="text" class="form-control" name="daerah_makanan" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0" style="width: 6em; height: 2.4em;">Submit</button>
                            <input class="btn btn-warning mx-2" type="reset" value="Reset" style="width: 6em; height: 2.4em;">
                            <a class="btn btn-primary" href="?page=makanan" role="button" style="width: 6em; height: 2.4em;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
