<?php include "view/admin/header.php"; ?>
  <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">New pack</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URL?>dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?=URL?>coachs/create">New pack</a></li>
                            </ol>
                        </div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pack Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form"> 
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $title ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Description " name="description" value="<?= $description ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Content" name="content" value="<?= $content ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Duration" name="duration" value="<?= $duration ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $price ?? "" ?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" placeholder="image" name="image" value="<?= $image ?? "" ?>">
                                                    </div>
                                                   
                                                    
                                                    
                                                </div>
                                              <!--  <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Description" rows="5" name="description"><?= $description ?? "" ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Address" rows="5" name="address"><?= $address ?? "" ?></textarea>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-form">
                                                <div class="form-group text-left">
                                                    <?php
                                                        if(!empty($errors)){
                                                            echo '<div class="alert alert-danger">';
                                                            echo '<ul>';
                                                            foreach($errors as $error){
                                                                echo '<li>'.$error.'</li>';
                                                            }
                                                            echo '</ul>';
                                                            echo '</div>';
                                                        }elseif(isset($created)){
                                                            echo '<div class="alert alert-success">';
                                                            echo 'Successfully user created';
                                                            echo '</div>';
                                                        }
                                                    ?>
                                                </div>
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-primary float-end" name="create_pack">Save</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End section content -->
<?php include "view/admin/footer.php"; ?>