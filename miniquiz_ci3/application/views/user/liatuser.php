<div class="container">

    <?php include_once "koneksi.php"; ?>
    <div class="row mb-2">
        <div class="col-sm-12">
            <span class="m-1">
                <a href="tambah" type="button" class="btn btn-dark">Tambah Data</a>
            </span>
        </div>
    </div>
    
    <table id="edituser" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <thead>
            <?php
            $strSQL = "SELECT * FROM user";
            $execStrSQL = mysqli_query($conn, $strSQL);
            if (mysqli_num_rows($execStrSQL) > 0) :
                while ($row = mysqli_fetch_assoc($execStrSQL)) :
                    // foreach ($h->result() as $row) :
            ?>
                    <tr>
                        <!-- <td><?= $row["id"]; ?></td> -->
                        <td><?= $row["id"]; ?></a></td>
                        <td><?= $row["name"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["address"]; ?></td>
                        <td><?= $row["phone"]; ?></td>
                        <td>
                            <a href="edituser?id=<?= $row["id"]; ?>" type="button" class="btn btn-dark">Edit data</a>
    
                            <a href="<?= base_url('user/hapus') ?>" type="button" class="btn btn-danger">Hapus</a>
                            <!-- <a href="<?= base_url('user/hapus' . $id) ?>" type="button" class="btn btn-danger">Hapus</a> -->
                        </td>
                    </tr>
                    <?php
                    // endforeach;
                    ?>
                <?php
                endwhile;
                ?>
            <?php
            endif;
            ?>
    
        </thead>
    </table>
    
    </div>
    </div>
</div>
