<?php



include_once('config.php');?>



<div class="login">

    <form action="loginLogic.php" class="form-signin" method="post">

        <h1 class="h3 mb-3 font-weight-normal">please sign in</h1>



        <label for="inputEmail" class="sr-only">email</label>

        <input type="text" id="inputEmail" class="form-control" placeholder="username" name="username" >



        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">sign in </button>



        <small>you dont have an acc <a href="signup.php">sign up</a></small>



        <p class="mt-5 mb-3 text-muted">digitalschool &copy:2024</p>

    </form>

</div>



<?php include('footer.php') ?>



