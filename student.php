<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<!-- Modal -->
<div class="modal fade" id="deleteConfirmation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmationLabel">Delete Profile?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this profile?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="container student">
<section id="studentInfoLink">
            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#studentInfoMenu" aria-expanded="false" aria-controls="studentInfoMenu">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        <div class="collapse" id="studentInfoMenu">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action" href="#">Send Message</a>
                <a class="list-group-item list-group-item-action" href="student_edit.php">Edit Profile</a>
                <button class="list-group-item list-group-item-action" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">
                    Delete Profile
                </button>
            </div>
        </div>
    </section>
    <section class="text-center mb-3">
            <div class="img-container col-4 offset-4 pr-1 my-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <h1 class="fw-bold">Reika Akuzawa</h1>
    </section>
    <section class="mb-3" id="basicInfo">
        <h1>Basic Infos</h1>
        <table class="table">
            <tr>
                <th>Birthday</th>
                <td>18.06.1984</td>
            </tr>
            <tr>
                <th>Tel.</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>l06981@gmail.com</td>
            </tr>
        </table>
        <button class="btn btn-outline-secondary col-4 offset-4">
            Edit
        </button>
    </section>
    <section class="mb-3" id="courseInfo">
        <h1>Course Infos</h1>
        <table class="table">
            <tr>
                <th>Class</th>
                <td>Basic</td>
            </tr>
            <tr>
                <th>Lesson Time</th>
                <td>Sat. 10.30 am</td>
            </tr>
            <tr>
                <th>Start date</th>
                <td>04.2020</td>
            </tr>
        </table>
        <button class="btn btn-outline-secondary col-4 offset-4">
            Edit
        </button>
    </section>
    <section>
        <h1>Lessons</h1>
        <ul class="nav nav-tabs my-3" id="monthTab" role="tablist">
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
            <div class="tab-pane fade show active" id="jun-tab-pane" role="tabpanel" aria-labelledby="jun-tab" tabindex="0">
                <div class="row justify-content-evenly">
                    <a href="#" class="col-2 lessons payed done">4.6</a>
                    <a href="#" class="col-2 lessons payed">11.6</a>
                    <a href="#" class="col-2 lessons payed">18.6</a>
                    <a href="#" class="col-2 lessons">25.6</a>
                </div>
            </div>
            <div class="tab-pane fade" id="jul-tab-pane" role="tabpanel" aria-labelledby="jul-tab" tabindex="0">.
                hello this is jul
            </div>
        </div>
        
        
    </section>
        <?php include "includes/footer.php" ?>
