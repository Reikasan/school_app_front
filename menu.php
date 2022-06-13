<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->finish_search();
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    
    <!-- main content -->
    <section class="main">
        <ul class="list-group list-group-flush" id="menu">
            <li class="list-group-item">
                <a class="list-group-item-action" href="index.php"><i class="me-3 fas fa-home"></i>Home</a>
            </li>
            <li class="list-group-item">
                <a class="list-group-item-action" href="mails.php"><i class="me-3 fas fa-envelope"></i></i>Message</a>
            </li>
            <li class="list-group-item">
                <a class="list-group-item-action" href="lessons.php"><i class="me-3 fas fa-calendar"></i>Lessons</a>
            </li>
            <li class="list-group-item accordion accordion-flush" id="students">
                <div class="accordion-item">
                    <div class="accordion-header" id="accordionHeading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                            <i class="me-3 fas fa-user"></i>Students
                        </button>    
                    </div>
                    <div id="collapse" class="accordion-collapse collapse" aria-labelledby="accordingHeading" data-bs-parent="#students">
                        <div class="accordion-body list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="all_students.php">All Students</a>
                            <a class="list-group-item list-group-item-action" href="student_add.php">Add Student</a>
                            <a class="list-group-item list-group-item-action" href="student.php">sample Student</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <a class="list-group-item-action" href="payinfo.php"><i class="me-3 fas fa-wallet"></i>Payment Info</a>
            </li>
            <li class="list-group-item">
                <a class="list-group-item-action" href="settings.php"><i class="me-3 fas fa-cog"></i>Settings</a>
            </li>
            <li class="list-group-item">
                <a class="list-group-item-action" href="logout.php"><i class="me-3 fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </section>
        
    <?php include "includes/footer.php" ?>

