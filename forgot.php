<?php include "includes/header.php"; ?>

<!-- navigation -->
<?php include "includes/navigation.php"; ?>
<?php 
// if($session->is_signed_in()) {
//     redirect("index.php");
// }

if(isset($_POST['resetPass'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    $user = new User();
    $isEmailVerified = $user->verify_user_email($username, $email);

    if($isEmailVerified) {
        $length = 50;
        
        $token = new Token();
        $token->user_id = $user->fetch_value($username, 'user_id');
        $token->email = $email;
        $token->token = $token->create_token($length);
        $token->issue_date_time = $token->format_issue_date();
        $token->expire_date_time = $token->create_and_format_expire_date($token->create_issue_date());
        $token->save();

        $_SESSION['token'] = $token->token;
        $_SESSION['email'] = $email;
        $_SESSION['issue_date'] = $token->issue_date_time;

        $email = "";
        $message = "<div class='alert alert-primary' role='alert'>Password reset request has been sent. <i class='fas fa-times closeBtn'></i></div>";
        // $message = "<h2 class='success'>Password reset request has been sent. <i class='fas fa-times closeBtn'></i></h2>";
        $dummy = "<div class='dummy alert alert-success' role='alert'>Dummy Email is <a class='alert-link' href='email.php' target='_blank'>HERE</a><i class='fas fa-times closeBtn'></i></div>";
    } else {
        $message = "<div class='alert alert-primary' role='alert'>Email doesn't much with your Username <i class='fas fa-times closeBtn'></i></h2>";
    }   
}

?>
<!-- Page Content -->
	<div class="container">
        <h1 class="text-center">Reset Password</h1>	
        <div class="back">
            <a href='login.php'>
            <i class="fas fa-chevron-left me-1 mb-3"></i>
            Back to Login page
            </a>
        </div>
        <div class="message-container">
            <?= isset($message) ? $message: null; ?>
            <?= isset($dummy) ? $dummy: null;?>    
        </div>
        <form action="" method="post" class="mb-3">
            <div class="col-8 offset-2 mb-3">
                <label class="form-label text-start" for="username">Username</label>
                <input class="form-control" type="text" name="username" value="Bar_at_Tokio"  readonly>
            </div>
            <div class="col-8 offset-2 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="" placeholder="enter your Email" class="form-control" requered>
            </div>
            <div class="mb-3 col-10 offset-1">
                <small class="text-danger">* This page is used only for demonstration purpose, mail isn't sent to entered Email Address</small><br>
                <small class="text-danger">* sample Email is "barattokio@sample.com"</small>
            </div>
            
            <input class="btn btn-primary my-3 col-4 offset-4" type="submit" value="Send Request" name="resetPass">
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