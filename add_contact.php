<?php 
use Admin\Libs\Contact;
include 'inc/header.php';
?>

    <main>
        <div class="container-fluid">
  
            <div class="row justify-content-center">

            <?php
                if (isset($_POST['add_contact'])) {
                    $contact = new Contact();
                    $contact->setFirstname($_POST['firstname']);
                    $contact->setLastname($_POST['lastname']);
                    $contact->setEmail($_POST['email']);
                    $contact->setMessage($_POST['message']);
                    if($contact->create()){
                        header("Location: admin/contacts.php");
                    }
                }
            ?>

            <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Contact </h3>
                        </div>
                        <div class="card-body">
                            <form method="post" id="add_contact" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname"> FirstName :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" placeholder="Enter FirstName" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">LastName :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" placeholder="Enter LastName" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email :</label>
                                    <input class="form-control py-4" name="email" id="email" type="text" placeholder="Enter Email" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="message">Message :</label>
                                    <input class="form-control py-4" name="message" id="message" type="text" placeholder="Enter Message" />
                                </div>
                                <input class="btn btn-primary" id="create" value="Contact" type="submit" name="add_contact" />
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">
                                <a href="#">Edit you Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>