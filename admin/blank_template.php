<?php 

    include "inc/header.php";

?>
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <!-- structure of user page -->
    <?php  

/*
            if (isset($_GET['do'])) {
                // code...
                $do = $_GET['do'];
            } else{
                $do = 'manage';
            }
*/



            $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
            echo $do;
        if ($do == 'manage') {
            // manage
        }

        if ($do == 'add') {
            // code...
        }
        if ($do == 'edit') {
            // code...
        }
        if ($do == 'update') {
            // code...
        }
        if ($do == 'delete') {
            // code...
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
</div>




<?php 

    include "inc/footer.php";

?>

 <!--<div class="form-group">
                            <label for="valid-state">Valid State</label>
                                <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid"
                                    value="Valid" required>
                                <div class="valid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is valid state.
                                </div>
                        </div>

                        <div class="form-group">
                              <label for="invalid-state">Invalid State</label>
                                <input type="text" class="form-control is-invalid" id="invalid-state"
                                    placeholder="Invalid" value="Invalid" required>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is invalid state.
                                </div>
                        </div>
                            -->