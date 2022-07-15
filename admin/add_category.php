
<?php 
use Admin\Libs\Category;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">News</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">News</li>
        </ol>
        <div class="row justify-content-center">
            <?php
                if(isset($_POST['add_category'])){
                    $user=new Category();
                    $user->setName($_POST['name']);
                    $user->setDescription($_POST['description']);
                    $user->create();
                }
            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">New Category</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="name">Name :</label>
                            <input class="form-control py-4" name="name" id="name" type="text" placeholder="Enter Category" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="description">Description :</label>
                            <input class="form-control py-4" name="description" id="description" type="text" placeholder="Enter Description" />
                        </div>
                        
                        <input class="btn btn-primary"  id="login" value="Create Category"  
                         type="submit" name="add_category"/>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="register.html">
                            Have an account? Go to login</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>

    <?php include "inc/footer.php" ?>