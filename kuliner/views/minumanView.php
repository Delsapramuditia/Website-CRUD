<div class="card card-primary card-outline" style="background-color: #f8c8dc; border-color: #f8c8dc;">
    <div class="card-header" style="background-color: #f8c8dc; border-color: #f8c8dc;">
        <h5 class="float-start mt-2 fw-bold" style="color: black;">Daftar Minuman Tradisional</h5>
        <div class="float-end mt-2">
            <a title="Tambah data" href="?page=minumanAdd" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
    </div>
    <div class="card-body" style="background-color: #f8e6e9;">
        <table id="example" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Minuman</th>
                    <th class="text-center">Asal Daerah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                    $sql = mysqli_query($conn, $query);

                    $nomor = 1;
                    foreach ($sql as $val) {
                    ?>
                    <td class="text-center"><?= $nomor++; ?></td>
                    <td><?= $val['nama_minuman']; ?></td>
                    <td><?= $val['daerah_minuman']; ?></td>
                    <td class="text-center">
                        <a href="?page=minumanUpdate&id=<?= $val['id_minuman'];?>" class="btn btn-sm btn-warning">Update</a>
                        <a href="?page=minumanDelete&id=<?= $val['id_minuman'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Minuman</th>
                    <th class="text-center">Asal Daerah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
