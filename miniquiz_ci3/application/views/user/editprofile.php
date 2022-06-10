<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>
    <div class="card-body">
        <a class="btn btn-dark" type="button" href="<?= base_url('user'); ?>">Back to Home Page</a>
    </div>

    <div class="card text-center">

        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 125rem;">
                <div class="container">
                    <div class="col-md-2 px-0 img-fluid">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">User Profile Information</h5>
                </div>
                <small>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fullname: <?= $user['name']; ?></li>
                        <li class="list-group-item">Address: <?= $user['address']; ?></li>
                        <li class="list-group-item">Phone: <?= $user['phone']; ?></li>
                        <li class="list-group-item">Email: <?= $user['email']; ?></li>
                        <li class="list-group-item">ID: <?= $user['id']; ?></li>
                    </ul>
                    <div class="card-body">
                        <h5 class="card-title">Edit Data</h5>
                    </div>

                </small>

                <?= $this->session->flashdata('message'); ?>



                <div class="row">
                    <div class="col-lg-8">


                        <?= form_open_multipart('user/editprofile'); ?>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Fullname: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Address: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address">

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Phone: </label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" name="phone">

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email">

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Edit</button>
                            </div>
                        </div>


                        </form>


                    </div>
                </div>






            </div>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->