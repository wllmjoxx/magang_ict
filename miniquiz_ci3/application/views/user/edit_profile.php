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
                <div class="card-body">
                <h5 class="card-title">Edit Data</h5>
                </div>

                <form action="" method="post">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fullname: <input type="text"></li>
                        <li class="list-group-item">Address: <input type="text"></li>
                        <li class="list-group-item">Phone: <input type="text"></li>
                        <li class="list-group-item">Email: <input type="text"></li>
                    </ul>

                    <div class="card-body">
                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Update Account
                </button> 
                    </div>
            
                </form>

                

            </small>
            
            
        </div>


    </div>
    
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

