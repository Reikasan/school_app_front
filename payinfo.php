<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->finish_search();
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <ul class="nav nav-tabs mt-3" id="monthTab" role="tablist">
        <li class="nav-item col-4" role="presentation">
            <button class="col-12 nav-link" id="may-tab" data-bs-toggle="tab" data-bs-target="#may-tab-pane" type="button" role="tab" aria-controls="may-tab-pane" aria-selected="false">May</button>
        </li>
        <li class="nav-item col-4" role="presentation">
            <button class="col-12 nav-link active" id="jun-tab" data-bs-toggle="tab" data-bs-target="#jun-tab-pane" type="button" role="tab" aria-controls="jun-tab-pane" aria-selected="true">Jun</button>
        </li>
        <li class="nav-item col-4" role="presentation">
            <button class="col-12 nav-link" id="jul-tab" data-bs-toggle="tab" data-bs-target="#jul-tab-pane" type="button" role="tab" aria-controls="jul-tab-pane" aria-selected="false">Jul</button>
        </li>
    </ul>
    <div class="tab-content" id="payMonth">
        <?php include "includes/search_section.php"; ?>
        <div class="tab-pane fade show active" id="jun-tab-pane" role="tabpanel" aria-labelledby="jun-tab" tabindex="0">
            <div class="accordion" id="paymentReika">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingReika">
                        <button class="accordion-button collapsed name" type="button" data-bs-toggle="collapse" data-bs-target="#reikasDetails" aria-expanded="false" aria-controls="reikasDetails">
                            Reika Akuzawa
                        </button>
                    </h2>
                    <div id="reikasDetails" class="accordion-collapse collapse show" aria-labelledby="headingReika" data-bs-parent="#paymentReika">
                        <div class="accordion-body position-relative">
                            <ul class="list-group list-group-flush position-relative">
                                <li class="list-group-item">From Last Month <span class="position-absolute end-0">0 Lesson</span></li>
                                <li class="list-group-item row">
                                    <label class="col-form-label col-7">Pay for this Month </label>
                                    <input type="number" name="" id="" class="form-control payforThisMonth"><label class="col-form-label col-2">Lesson</label>
                                </li>
                                <li class="list-group-item fw-bold">Total <span class="position-absolute end-0">4 Lesson</span></li>
                            </ul>
                            <input type="submit" value="Update" class="col-4 offset-4" disable>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="jul-tab-pane" role="tabpanel" aria-labelledby="jul-tab" tabindex="0">.
            hello this is jul
        </div>
    </div>
    
    
    <?php include "includes/footer.php" ?>

