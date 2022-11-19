<?php include "view/admin/header.php"; ?>
        <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="all-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">Caochs</h4>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header fix-card">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="card-title"> Coachs List </h4>
                                        </div>
                                        <div class="col-4 float-end">
                                            <a href="<?=URL?>coachs/create" class="btn btn-primary float-end">New
                                                Coach</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Full Name</th>
                                                    <th>Mobile No.</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($coachs as $c):?>
                                                    <tr>
                                                        <td><?= $c['id'] ?></td>
                                                        <td><?= $c['username'] ?></td>
                                                        <td><?= $c['fullname'] ?></td>
                                                        <td><?= $c['phone'] ?></td>
                                                        <td><?= $c['email'] ?></td>
                                                        <td><?= $c['active'] == '1'? 'Active' : 'Not active' ?></td>
                                                        <td>
                                                            <a href="<?=URL?>coachs/update?id=<?= $c['id'] ?>" class='mr-4'>
                                                                <span class='fas fa-pencil-alt'></span>
                                                            </a>
                                                            <a href="<?=URL?>coachs/delete?id=<?= $c['id'] ?>" class='mr-4 delet'
                                                            >
                                                                <span class='fas fa-trash-alt'></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(isset($deleted)){
                            if($deleted){
                                echo '<div class="alert alert-success">Coach deleted!</div>';
                            }else{
                                echo '<div class="alert alert-danger">Somthing wrong happen!</div>';
                            }
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