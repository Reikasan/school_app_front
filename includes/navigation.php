<nav class="nav top-nav">
<?php 
if($session->is_signed_in()) {
    $logoUrl = "index.php";
} else {
    $logoUrl = "login.php";
};

?>

    <div class="logo">
        <a href="<?= $logoUrl; ?>">School APP</a>
    </div>
</nav>