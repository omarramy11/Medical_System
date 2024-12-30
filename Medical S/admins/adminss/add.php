<?php require_once '../../config.php'; ?>
<?php require_once BLA. 'inc/header.php'; // linking header  ?>
<?php require BL. 'functions/validate.php'; ?>

<?php

    // check submit if empty
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (CheckEmpty($name) AND CheckEmpty($email) AND CheckEmpty($password))
        {
            if(ValidEmail($email))
            {
                // password security
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                // else , normal => not security

                // if check is true , CONNECT TO DB
                // DB CONNECT, INSERT the results
                $sql = "INSERT INTO users_reg (`user_FullName`, `user_Email`, `user_Password`) 
                        VALUES ('$name', '$email', '$hashedPassword')";
                        $success_message = db_insert($sql);
            }
            else
            {
                $error_message = "Please type correct Email";
            }
        }
        else        
        {
            $error_message = "please fill all Fields";
        }

         require 'functions/messages.php';  // messages file dir
    }   


?>




    <!-- Text Form bootstrap -->
    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <!-- Name -->
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <!-- Email -->
            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email" class="form-control" >
            </div>

            <!-- Password -->
            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php   require_once BLA. 'inc/footer.php'; ?>


