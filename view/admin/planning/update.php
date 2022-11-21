<?php include "view/admin/header.php"; ?>
<!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">Planning</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URL?>dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?=URL?>planning">Planning</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Planning :  <?= $cours ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                     <div class="form-group">
                                                        <label class="form-group" for="jour">Modifier le jour :</label>
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
                                                        <input type="text" class="form-control" placeholder="time" name="time" value="<?= $time ?? "" ?>">
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="cours" name="cours" value="<?= $cours ?? "" ?>">
                                                    </div>
                                                   
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="coach" rows="5" name="coach"><?= $coach ?? "" ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group text-right">
                                                        <button type="submit" name="update_planning"  value="<?= $id ?>" class="btn btn-primary float-end">Save</button>
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
                                    <h4 class="card-title">planning</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    
                                                    <div class="form-group text-right">
                                                        <button type="submit" name="update_active"  value="<?= $id ?>" class="btn btn-primary float-end ">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form action="delete">
                                            <div class="form-group text-right">
                                                <button type="submit" name="id" value="<?= $id ?>" class="btn btn-danger float-start delet">Delete planning</button>
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