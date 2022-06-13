<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->finish_search();
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="alert alert-primary" role="alert">
        3 New Message! <a href="#" class="alert-link">Check here</a>
</div>
<div class="container">
    <div class="accordion accordion-flush" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Today's Lesson
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="list-group list-group-flush">
                        <a class="list-group item list-group-action" href="#">13:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">16:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">17:00 Reika Akuzawa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Sat.11.6
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="list-group list-group-flush">
                        <a class="list-group item list-group-action" href="#">13:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">16:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">17:00 Reika Akuzawa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Sun.12.6
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="list-group list-group-flush">
                        <a class="list-group item list-group-action" href="#">13:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">16:00 Reika Akuzawa</a>
                        <a class="list-group item list-group-action" href="#">17:00 Reika Akuzawa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "includes/footer.php" ?>

