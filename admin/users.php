<?php 

    include "inc/header.php";

?> 
    <!-- structure of user page -->
    <?php  


            $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
            echo $do;
        if ($do == 'manage') {
            // manage

            ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>All Users Information</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                User Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>User Role</th>
                            <th>Status</th>
                            <th>Ation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                         $count=0;
                         $query = "SELECT * FROM users";
                         $view_result = mysqli_query($db, $query);
                         while($row = mysqli_fetch_assoc($view_result)) {
                            $u_id = $row['u_id'];
                            $u_name = $row['u_name'];
                            $u_photo = $row['u_photo'];
                            $u_email = $row['u_email'];
                            $u_pass = $row['u_pass'];
                            $phone = $row['phone'];
                            $u_address = $row['u_address'];
                            $u_gender = $row['u_gender'];
                            $u_dob = $row['u_dob'];
                            $u_biodata = $row['u_biodata'];
                            $u_role = $row['u_role'];
                            $u_status = $row['u_status']; 
                            $count++;
                            ?>




                        <tr>
                            <td><?php echo $count ?></td>
                            <td>
                                <img src="assets/images/users/<?php echo $u_photo;?>" class="circle" width="80" style="border-radius: 100%;">
                            </td>
                            <td><?php echo $u_name ?></td>
                            <td><?php echo $u_email ?></td>
                            <td><?php echo $phone ?></td>
                            <td>
                            <?php 

                                if ($u_role == 0) {
                                    echo '<span class="badge bg-success">Subscriber</span>';
                                }

                                if ($u_role == 1) {
                                    echo '<span class="badge bg-success">Editor</span>';
                                }

                                if ($u_role == 2) {
                                    echo '<span class="badge bg-success">Admin</span>';
                                }

                            ?>
                                
                            </td>
                            <td>
                            <?php
                                 if ($u_status == 0) {
                                    echo '<span class="badge bg-success">Active</span>';
                                }

                                 if ($u_status == 1) {
                                    echo '<span class="badge bg-danger">Inactive</span>';
                                }
                            ?>
                                
                            </td>
                            <td>
                                <a type="button" data-bs-tooggle="tooltip" data-bs-placement="top" title="Profile" href="" >
                                    <i class="fa fa-eye text-success ms-3 "></i>
                                </a>

                                <a type="button" data-bs-tooggle="tooltip" data-bs-placement="top" title="Edit" href="" >
                                    <i class="fa fa-edit text-warning ms-3 "></i>
                                </a>

                                <a type="button" data-bs-tooggle="tooltip" data-bs-placement="top" title="Delete" href="users.php?do=delete&d_id=<?php echo $u_id ?>" >
                                    <i class="fa fa-trash text-danger ms-3 "></i>
                                </a>
                            </td>
                        </tr>

                            <?php
                         }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
        </div>


            <?php
        }

        if ($do == 'add') {
            ?>

  <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add New User</h3>
                <p class="text-subtitle text-muted">Give textual form controls like input upgrade with custom styles,
                    sizing, focus states, and more.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Please fill up all the information</h4>
            </div>

             <form method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                       
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" id="username" class="form-control" placeholder="User Name" name="username" required="required">
                            <p><small class="text-muted">Please Insert Your full name</small></p>
                        </div>

                        <div class="form-group">
                            <label for="useremail">User Email</label>
                            <input type="email" id="useremail" class="form-control" placeholder="example@something.com" name="useremail" required="required">
                            <p><small class="text-muted">Please Insert Your full email</small></p>
                        </div>

                        <div class="form-group">
                            <label for="password">User password</label>
                            <input type="password" id="password" class="form-control" placeholder="**********" name="password" required="required">
                            <p><small class="text-muted">Please use letter and special character both</small></p>
                        </div>

                        <div class="form-group">
                            <label for="phone">phone number</label>
                            <input type="number" id="phone" class="form-control" placeholder="Phone Number" name="phone" required="required">
                            <p><small class="text-muted">EX:01000000000</small></p>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="address" name="address"></textarea>
                            <label>Your Current address</label>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender">Select gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="">select gender</option>
                                <option value="male">Male</option>
                                <option value="female">female</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Date of birth</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <select class="form-select" id="role" name="userrole">
                                <option value="">select your role</option>
                                <option value="male">Subscriber</option>
                                <option value="female">Editor</option>
                                <option value="others">Admin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="biodata">Biodata</label>
                            <textarea class="form-control" id="biodata" rows="6" placeholder="Biodata" name="biodata"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Select your file</label>
                            <input class="form-control" type="file" id="photo" name="birthday" name="photo" name="image">
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                             <button type="submit" class="btn btn-primary me-2 mb-1" name="add_user">Submit</button>
                             <button type="reset" class="btn btn-lg btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
             </form>



             <!-- user add section -->

             <<?php 

             if (isset($_POST['add_user'])) {
                 $username   = $_POST['username'];
                 $useremail  = $_POST['useremail'];
                 $password   = $_POST['password'];
                 $phone      = $_POST['phone'];
                 $address    = $_POST['address'];
                 $gender     = $_POST['gender'];
                 $birthday   = $_POST['birthday'];
                 $userrole   = $_POST['userrole'];
                 $biodata    = $_POST['biodata'];
                 $file_name  = $_FILES['image']['name'];

                 $tmp_name  = $_FILES['image']['tmp_name'];
                 
                 $extn_array = explode('.', $_FILES['image']['name']);
                 
                 $extn = strtolower(end($extn_array));

                 $extensions = array('jpg','png','jpeg');

                 if (empty($username) || empty($useremail) || empty($password)) {
                     echo '<span class="alert alert-danger">Username, Useremail and password are required</span>';
                 } else{


                    if (in_array($extn, $extensions === false)) {
                         echo "please insert valid type of image";
                    }else {
                    $random = rand();
                    $updateName = $random.$file_name;

                        //transfer image to folder
                    move_uploaded_file($tmp_name, 'assets/images/users/'.$file_name);

                    $hasspassword = sha1($password);
                    $userAddQuery =  "INSERT INTO users (u_name, u_photo, u_email, u_pass, phone, u_address, u_gender, u_dob, u_biodata, u_role, u_status) VALUES ('$username', '$file_name', '$useremail', '$hasspassword', '$phone', '$address', '$gender', '$birthday', '$biodata', '$userrole', '1')";
                    $userAdd = mysqli_query($db, $userAddQuery);
                    if ($userAdd) {
                        header('Location: users.php');
                    } else{
                        die('User Add Error!'.mysqli_error($db));
                    }


                    
                    
                    }
                    
                 }
                 
             }

              ?>
        </div>
    </section>


</div>

            <?php
        }
        if ($do == 'edit') {
            // code...
        }
        if ($do == 'update') {
            // code...
        }
        if ($do == 'delete') {
            if (isset($_GET['d_id'])) {
                 $delete_id = $_GET['d_id'];

                 $photoQuery = "SELECT u_photo FROM users WHERE u_id='$delete_id'";
                 $photoRes = mysqli_query($db,$photoQuery);
                 while($row = mysqli_fetch_assoc($photoRes)){
                    $photoName = $row['u_photo'];
                 }

                 unlink('assets/images/users'.$photoName);
                 $deleteQuery = "DELETE FROM users WHERE u_id = '$delete_id'";
                 $deleteRes = mysqli_query($db, $deleteQuery);
                 if ($deleteRes) {
                     header('Location: users.php');
                 }else{
                    die("Delete user error!".mysqli_error($db));
                 }
             } 
        }


        
         $do = 'manage';    //view user
         $do = 'add';      //add user
         $do = 'delete';   //delete user
         $do = 'update';   //update user
         $do = 'edit';     //edit user

         //default
         $do = 'manage';


    ?>


    <section class="row">
        <div class="col-12 col-lg-12">
           
        </div>
    </section>





<?php 

    include "inc/footer.php";

?>