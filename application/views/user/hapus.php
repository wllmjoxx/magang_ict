<div class="container">

    <div class="row mb-2">
        <div class="col-sm-12">
            <span class="m-1">
                <a href="liatuser" class="btn btn-info" role="button">Kembali</a>
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
            include "koneksi.php";
            include "fungsi.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = bersihkan_input($_POST['id']);
                $strSQL = "DELETE FROM user WHERE id = '$id'";
                $execStrSQL = mysqli_query($conn, $strSQL);
                if ($execStrSQL) {
            ?>
                    <div class="alert alert-success">
                        <b>Data berhasil</b> dihapus dari database
                    </div>


                <?php
                } else {
                ?>
                    <div class="alert alert-danger">
                        <b>Data tidak berhasil</b> dihapus dari database
                    </div>
                <?php
                }
            }

            if (isset($_GET['id'])) {
                $id = bersihkan_input($_GET['id']);
            }
            $strSQL = "SELECT * FROM user WHERE id ='$id'";
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
                            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                <input type="hidden" name="id" value="<?= $id?>">
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
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