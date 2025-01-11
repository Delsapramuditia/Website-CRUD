<?php
require "includes/config.php";

$id = $_GET['id'];

$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}

if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];
    $query2 = "UPDATE tbl_makanan SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' WHERE id_makanan='$id2'";
    $sql2 = mysqli_query($conn, $query2);
    if ($sql2) {
        echo "<script>window.alert('Data berhasil diupdate!'); window.location='?page=makanan';</script>";
    } else {
        echo "<script>window.alert('Gagal update data!'); window.location='?page=makanan';</script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                <div class="card-header" style="background-color: #f8c8dc; border-color: #f8c8dc;">
                    <h5 class="m-0" style="color: black;">Update Data Daftar Makanan</h5>
                </div>
                <div class="card-body" style="background-color: #f8e6e9;">
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label" style="color: black;">Nama Makanan</label>
                                <input type="text" class="form-control" name="nama_makanan" value="<?= $data['nama_makanan'] ?>" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label" style="color: black;">Daerah Makanan</label>
                                <input type="text" class="form-control" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light mx-2" style="width: 6em; height: 2.4em;">Update</button>
                            <a class="btn btn-primary" href="?page=makanan" style="width: 6em; height: 2.4em;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
