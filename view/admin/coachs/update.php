<?php include "view/admin/header.php"; ?>
        <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">Coach: <?= $username ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URL?>dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?=URL?>coachs">Coachs</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="<?= $fullname ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Mobile No." name="phone" value="<?= $phone ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $email ?? "" ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Description" rows="5" name="description"><?= $description ?? "" ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Address" rows="5" name="address"><?= $address ?? "" ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group text-right">
                                                        <button type="submit" name="update_information"  value="<?= $id ?>" class="btn btn-primary float-end">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Security Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Username</label>
                                                        <input class="form-control" type="text" placeholder="Username" name="username" value="<?= $username ?? "" ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label">New Password</label>
                                                        <input class="form-control" type="password" placeholder="New Password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" name="update_password"  value="<?= $id ?>" class="btn btn-primary float-end ">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Account</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Account status</label>
                                                        <select class="form-control form-select" name="active">
                                                            <option value="1" <?= $active == '1' ?'selected':''?>َ >Active</option>
                                                            <option value="-1" <?= $active == '-1' ?'selected':''?>َ >Not active</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button type="submit" name="update_active"  value="<?= $id ?>" class="btn btn-primary float-end ">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form action="delete">
                                            <div class="form-group text-right">
                                                <button type="submit" name="id" value="<?= $id ?>" class="btn btn-danger float-start delet">Delete account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(!empty($errors)){
                            echo '<div class="alert alert-danger">';
                            echo '<ul>';
                            foreach($errors as $error){
                                echo '<li>'.$error.'</li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        }elseif(isset($updated)){
                            echo '<div class="alert alert-success">';
                            echo 'Successfully user updated';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- End section content -->
<script>
    document.querySelectorAll('.delet').forEach((el)=>{
        el.addEventListener('click', (e)=>{if(!confirm('Are you sure?')) e.preventDefault();})
    })
</script>
<?php include "view/admin/footer.php"; ?>