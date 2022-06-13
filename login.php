<?php include "includes/header.php"; ?>

<!-- navigation -->
<?php include "includes/navigation.php"; ?>
<?php 
// if($session->is_signed_in()) {
//     redirect("index.php");
// }
$loginUser = new User();
$db_password = $loginUser->find_by_id(1)->password;

//LOGIN FUNCTION
if(isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user = User::verify_user($username, $password);

    if($user) {
        $session->login($user);
        redirect("index.php");
    } else {
        $message = "<h2 class='warning'>Your password or username is incorrect</h2>";
    }
} else {
    $username = "";
    $password = "";
    $message = "";
}
?>
	<!-- Page Content -->
	<div class="container">
        <div class="message-container">
            <?= isset($message) ? $message: null; ?>
        </div>
        <div class="my-5 text-center">
            <small class="text-danger">Only for demonstration purpose, password is already set.</small><br>
            <small class="text-danger">Also you can play around with <a class="underline" href="forgot.php">Forgot your password page</a></small>
        </div>
        <form action="" method="post" class="login-form">
            <div class="col-8 offset-2 mb-3">
                <label class="form-label text-start" for="username">Username</label>
                <input class="form-control" type="text" name="username" value="Bar_at_Tokio"  readonly>
            </div>
            <div class="col-8 offset-2">
                <label class="form-label text-start" for="password">Password</label>
                <input class="form-control" type="password" name="password" value="<?= $db_password; ?>" placeholder="enter your password" requered>
                <br>
                <a class="forgot mb-3" href="forgot.php">Forget your password?</a>
            </div>
            <input class="btn btn-primary my-3 col-4 offset-4" type="submit" value="Login" name="login">
        </form>
	</div> <!-- /.container -->
    <footer>
        <div class="copyright">
            <small>2021 &#64;Reika Akuzawa</small>
        </div> 
    </footer>
    <script src="js/script.js"></script>
</body>
    
</html>
