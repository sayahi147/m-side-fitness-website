<?php include "view/admin/header.php"; ?>
        <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="all-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">Pricing</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URL?>dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="<?=URL?>pricing">Pricing</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header fix-card">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="card-title"> Pricing</h4>
                                        </div>
                                        <div class="col-4 float-end">
                                            <a href="<?=URL?>pricing/create" class="btn btn-primary float-end">New Pack</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Content</th>
                                                    <th>Duration</th>
                                                    <th>price</th>
                                                    
                                                    <th>Image</th>     
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            <?php foreach($packs as $c):?>
                                                    <tr>
                                                        <td><?= $c['id'] ?></td>
                                                        <td><?= $c['title'] ?></td>
                                                        <td><?= $c['description'] ?></td>
                                                        <td><?= $c['content'] ?></td>
                                                        <td><?= $c['duration'] ?></td>
                                                        <td><?= $c['price'] ?></td>
                                                        <td><?= $c['image'] ?></td>
                                                        
                                                        
                                                        <td>
                                                           
                                                            <a href="<?=URL?>pricing/delete?id=<?= $c['id'] ?>" class='mr-4 delet'>
                                                                <span class='fas fa-trash-alt'></span>
                                                            </a>
                                                            <a href="<?=URL?>pricing/update?id=<?= $c['id'] ?>" class='mr-4'>
                                                                <span class='fas fa-pencil-alt'></span>
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
                                echo '<div class="alert alert-success">Pack deleted!</div>';
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