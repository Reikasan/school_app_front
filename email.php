<?php include "includes/header.php"; ?>

<!-- navigation -->

<?php 
    $token = new Token();
    $token->token = $_SESSION['token'];
    $token->email = $_SESSION['email'];
    $token->issue_date_time = $_SESSION['issue_date'];

?>
<!-- Page Content -->
	<div class="container m-5">
        <div class="position-relative my-5 border-bottom">
            <h3 class="fw-bold">Reservation Manager</h3>	
            <h6>Reset Your Password</h6>
            <h6>To: <?= $token->email; ?></h6>
            <small class="receive-date position-absolute bottom-0 end-0 text-secondary"><?= $token->issue_date_time; ?></small>
        </div>
        <div class="mb-5">
            <h2 class="text-center">Reset Your Password</h2>
            <p>Hello! This email has been sent to you to reset your login password.</p>
            <p>Please click the link below to complete the password reset process. This link will expire in 24 hours.</p>
            <div class="text-center">
                <a href="reset_password.php?email=<?= $token->email; ?>&token=<?= $token->token; ?>">Reset Password</a>
            </div>
        </div>
        <div class="mail-footer mb-3">
            <h6 class="fw-bold">Reservation Manager</h6>
            <a href="#">https://reservation_manager.com</a><br>
            <a href="#">contact@reservation_manager.com</a>
        </div>
        
	</div> <!-- /.container -->
    <footer>
        <div class="copyright">
            <small>2021 &#64;Reika Akuzawa</small>
        </div> 
    </footer>
    <script src="js/script.js"></script>
</body>
    
</html>