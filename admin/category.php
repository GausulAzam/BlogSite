<?php 

    include "inc/header.php";

?>
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-4">
                    <!-- new category-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Category</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Category Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Cateory Name" id="first-name-icon" name="cat_name">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="form-group has-icon-left">
                                                <label for="exampleFormControlTextarea1" class="form-label">Category Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cat_description"></textarea>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="cat_submit">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Insert database -->


                            <?php  


                            if (isset($_POST['cat_submit'])){
                                $cat_name = $_POST['cat_name'];
                                $cat_description = $_POST['cat_description'];

                                $query2 = "INSERT INTO category (c_name, c_description) VALUES ('$cat_name', '$cat_description')";

                                $result2 = mysqli_query($db, $query2);
                                if ($result2){
                                    header('Location: category.php');

                                } else "error!";

                            }


                            ?>


                        </div>
                    </div>
                </div>
                  <!-- update category-->

                  <?php  

                  if (isset($_GET['edit_id'])) {

                        $edit_id = $_GET['edit_id'];
                        $query4 = "SELECT * FROM category WHERE c_id='$edit_id'";
                        $result4 = mysqli_query($db,$query4);
                        while ($row = mysqli_fetch_assoc($result4)) {
                            $c_id = $row['c_id'];
                            $c_name = $row['c_name'];
                            $c_description = $row['c_description']; } 

                        ?>        

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Update Category</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Cateory Name" id="first-name-icon" name="cat_name" value="<?php echo $c_name;?>">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="form-group has-icon-left">
                                                <label for="exampleFormControlTextarea1" class="form-label">Category Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cat_description" value="<?php echo $c_description;?><?php echo $c_description;?>"></textarea>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="cat_update">Update</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- update category -->
                            <?php 
                                if (isset($_POST['cat_update'])) {

                                    $cat_name = $_POST['cat_name'];
                                    $cat_description = $_POST['cat_description'];


                                   $query5 = "UPDATE category SET c_name = '$cat_name', c_description = '$cat_description' WHERE c_id = '$c_id'";


                                    $result5 = mysqli_query($db, $query5);
                                    if ($result5){
                                    header('Location: category.php');

                                    } else "error!";



                                }


                            ?>

                        </div>
                    </div>

                        <?php



                  }

                  ?>
                    <!-- end update -->
                  
                </div>
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Categories List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Category name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- read category info from database -->
                                        <?php 

                                        $query = "SELECT * FROM category";
                                        $result = mysqli_query($db,$query);
                                        $count = 0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $c_id = $row['c_id'];
                                            $c_name = $row['c_name'];
                                            $c_description = $row['c_description'];
                                            $count++;

                                        ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/faces/5.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0"><?php echo $c_name; ?></p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0"><?php echo $c_description; ?></p>
                                            </td>
                                            
                                            <td>
                                                <a>
                                                    <i class="fa fa-trash text-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#danger<?php echo $c_id;?>"></i>
                                                </a>
                                                
                                                <a href="Category.php?edit_id=<?php echo $c_id; ?>">
                                                    <i class="fa fa-edit text-success ms-3"></i>
                                                </a>
                                            </td>
                                        </tr>


                                         <!--Danger theme Modal -->
                                        <div class="modal fade text-left" id="danger<?php echo $c_id;?>" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content text-center">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">Danger Modal
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <a type="button" class="btn btn-danger ml-1"
                                                         href="category.php?delete_id=<?php echo $c_id;?>">Accept
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }

                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="assets/images/faces/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">John Duck</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
               
            </div>
            <div class="card">
                
                
            </div>
        </div>
    </section>


    <!-- deelte category information -->

    <?php 

        if (isset($_GET['delete_id'])) {
            $delete_id = $_GET['delete_id'];

            $table = 'category';
            $key = 'c_id';
            $d_id = $delete_id;
            $url = 'category.php';



            delete($table, $key, $d_id, $url);



    ?>



<?php 

    include "inc/footer.php";

?>