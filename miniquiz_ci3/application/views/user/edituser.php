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
    $name = $email = $password = $address = $phone = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = bersihkan_input($_POST['name']);
        $email = bersihkan_input($_POST['email']);
        $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $address = bersihkan_input($_POST['address']);
        $phone = bersihkan_input($_POST['phone']);
        $strSQL = "INSERT INTO user (name, email, password, address, phone) 
        VALUES ('$name','$email','$password','$address','$phone')";

        // echo "Query = " . $strSQL;
        $execStrSQL = mysqli_query($conn, $strSQL);
        if ($execStrSQL) {
    ?>
            <div class="alert alert-success">
                <b>Data berhasil</b> ditambahkan kedalam database
            </div>


        <?php

        } else {
        ?>
            <div class="alert alert-danger">
                <b>Data tidak berhasil</b> ditambahkan kedalam database<br>
                <?= "Error: " . $execStrSQL . "<br>" . mysqli_error($conn); ?>
            </div>
    <?php
        }
    }
    ?>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="post">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th><input type="text" class="form-control" name="name"></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Email</th>
                    <th><input type="email" class="form-control" name="email"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Adress</td>
                    <td><input type="address" class="form-control" name="address"></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" class="form-control" name="phone"></td>
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