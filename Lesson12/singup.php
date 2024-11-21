<?php
include_once('config.php');
?>


<div class="singup">
<form action="register.php" class="form-singin" method="post">
<h1 class="h3 mb-3 font-weight-normal">please sing in</h1>

<label for="inputEmail" class="sr-only">Name</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Name" name="Name" >

<label for="inputEmail" class="sr-only">Surname</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="Surname" >

<label for="inputEmail" class="sr-only">Email</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Email" name="Email" >

<label for="inputEmail" class="sr-only">Username</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="Username" >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">sign in </button>

<small>you dont have an acc <a href="signup.php">sign up</a></small>

<p class="mt-5 mb-3 text-muted">digitalschool &copy:2024</p>





</form>
</div>




<?php include('footer.php') ?>
