
<?php include "view/admin/header.php"; ?>
  <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">New planning</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URL?>dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?=URL?>coachs/create">New planning</a></li>
                            </ol>
                        </div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Planning Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form"> 
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    
                                                    <div class="form-group">
                                                        <label class="form-group" for="jour">Choisir le jour :</label>
                                                            <select type="text" name="jour" value="<?= $jour ?? "" ?>">
                                                                <option value="null"></option>
                                                                <option value="Lundi">Lundi</option>
                                                                 <option value="Mardi">Mardi</option>
                                                                 <option value="Mercredi">Mercredi</option>
                                                                 <option value="Jeudi">Jeudi</option>
                                                                 <option value="vendredi">vendredi</option>
                                                                 <option value="samedi">samedi</option>
                                                                 <option value="Dimanche">Dimanche</option>
                                                             </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="temps " name="time" value="<?= $time ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="cours" name="cours" value="<?= $cours ?? "" ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="coach" name="coach" value="<?= $coach ?? "" ?>">
                                                    </div>
                                                    
                                                   
                                                    
                                                    
                                                </div>

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
                                                    <button type="submit" class="btn btn-primary float-end" name="create_planning">Save</button>
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