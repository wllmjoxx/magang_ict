<div class="container">

    <h2>Edit Data User</h2>
    <div class="row mb-2">
        <div class="col-sm-12">
            <span class="m-1">
                <a href="liatuser" class="btn btn-info" role="button">Kembali</a>
            </span>
        </div>
    </div>

    <?php
    include "koneksi.php";
    include "fungsi.php";
    $id = $name = $email = $password = $address = $phone = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = bersihkan_input($_POST['id']);
        $name = bersihkan_input($_POST['name']);
        $email = bersihkan_input($_POST['email']);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $address = bersihkan_input($_POST['address']);
        $phone = bersihkan_input($_POST['phone']);

        $strSQL = "UPDATE user 
        SET id ='$id', name ='$name', email ='$email', password ='$password', address ='$address', phone ='$phone'
        WHERE id = $id";
        // echo "Query = " . $strSQL;
        $execStrSQL = mysqli_query($conn, $strSQL);
        if ($execStrSQL) {
    ?>
            <div class="alert alert-success">
                <b>Data berhasil</b> diubah pada database
            </div>


        <?php

        } else {
        ?>
            <div class="alert alert-danger">
                <b>Data tidak berhasil</b> diubah pada database<br>
                <?= "Error: " . $execStrSQL . "<br>" . mysqli_error($conn); ?>
            </div>
    <?php
        }
    } else {
        if (isset($_GET['id'])) {
            $id = bersihkan_input($_GET['id']);
            $strSQL = "SELECT * FROM user WHERE  id='$id'";
            $execStrSQL = mysqli_query($conn, $strSQL);
            if (mysqli_num_rows($execStrSQL) > 0) {
                while ($row = mysqli_fetch_assoc($execStrSQL)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $phone = $row['phone'];
                    //dsadasdfdfdf
                }
            }
        }
    }
    ?>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><input type="text" class="form-control" name="id" value="<?= $id; ?>" readonly></th>
                </tr>
                <tr>
                    <th>Fullname</th>
                    <th><input type="text" class="form-control" name="name" value="<?= $name; ?>" required></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Email</th>
                    <th><input type="email" class="form-control" name="email" value="<?= $email; ?>" required></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Adress</td>
                    <td><input type="address" class="form-control" name="address" value="<?= $address; ?>" required></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" class="form-control" name="phone" value="<?= $phone; ?>" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control" name="password"></td>
                </tr>
            </tbody>
            <tbody>
            </tbody>
        </table>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </span>
            </div>
        </div>
    </form>
</div>