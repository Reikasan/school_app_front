<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <?php include "includes/search_section.php"; ?>
    <div class="mb-3 student-link">
        <a href="student.php" class="row">
            <div class="img-container col-3 p-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <div class="col-9">
                <h1 class="fw-bold  text-start">Reika Akuzawa</h1>
                <p>next lesson is  Sat.6.18</p>
            </div>
        </a>
    </div>
    <div class="mb-3 student-link">
        <a href="student.php" class="row">
            <div class="img-container col-3 p-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <div class="col-9">
                <h1 class="fw-bold  text-start">Reika Akuzawa</h1>
                <p>next lesson is  Sat.6.18</p>
            </div>
        </a>
    </div>
    <div class="mb-3 student-link">
        <a href="student.php" class="row">
            <div class="img-container col-3 p-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <div class="col-9">
                <h1 class="fw-bold  text-start">Reika Akuzawa</h1>
                <p>next lesson is  Sat.6.18</p>
            </div>
        </a>
    </div>
    <div class="mb-3 student-link">
        <a href="student.php" class="row">
            <div class="img-container col-3 p-3">
                <img class="img-fluid" src="img/blank-profile-picture-973460_640.png" alt="profile photo">
            </div>
            <div class="col-9">
                <h1 class="fw-bold  text-start">Reika Akuzawa</h1>
                <p>next lesson is  Sat.6.18</p>
            </div>
        </a>
    </div>
    <div class="mb-3 student-link">
        <a href="student.php" class="row">
            <div class="img-container col-3 p-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <div class="col-9">
                <h1 class="fw-bold  text-start">Reika Akuzawa</h1>
                <p>next lesson is  Sat.6.18</p>
            </div>
        </a>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
    </nav>
    <?php include "includes/footer.php" ?>
