<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Selamat datang <?= $user['name'];?>!</h1>
                        <div class="card text-center">
                            <!-- <div class="card-header">
                                Data User
                            </div>
                        <div class="card-body">
                            <p class="card-text">Fullname: <?= $user['name'];?></p>
                            <p class="card-text">Address: <?= $user['address'];?></p>
                            <p class="card-text">Phone: <?= $user['phone'];?></p>
                            <p class="card-text">Email: <?= $user['email'];?></p>
                            <a href="#" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="card-footer text-muted">
                                ```````
                        </div> -->
                        
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 125rem;">
                                    <div class="container">
                                        <div class="col-md-2 px-0 img-fluid">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image'];?>" class="img-fluid">
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <h5 class="card-title">User Profile Information</h5>
                                </div>
                                <small>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Fullname: <?= $user['name'];?></li>
                                        <li class="list-group-item">Address: <?= $user['address'];?></li>
                                        <li class="list-group-item">Phone: <?= $user['phone'];?></li>
                                        <li class="list-group-item">Email: <?= $user['email'];?></li>
                                    </ul>

                                </small>
                                <div class="card-body">
                                    <a class="btn btn-dark" type="button" href="<?= base_url('user/editprofile'); ?>">Edit Profile</a>
                                </div>
                            </div>


                        </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            