<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <section class="text-center mb-3">
            <div class="img-container col-4 offset-4 pr-1 my-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
            </div>
            <h1 class="fw-bold">Reika Akuzawa</h1>
    </section>
    <section class="mb-3">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="birthday">Birthday</label>
                <input class="form-control" type="date" name="birthday" id="" value="1984-06-18">
            </div>
            <div class="mb-3"> 
                <label class="form-label" for="tel">Tel.</label>
                <input class="form-control" type="tel" name="tel" id="">
            </div> 
            <div class="mb-3">      
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="" value="l06981@gmail.com">
            </div> 
            <div class="mb-3"> 
                <label class="form-label" for="class">Class</label>
                <select class="form-control" name="class" id="">
                    <option value="kids1">Kids 1</option>
                    <option value="kids2">Kids 2</option>
                    <option value="basic">Basic</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="upper">Upper</option>
                    <option value="professional">Professional</option>
                </select>
            </div> 
            <div class="mb-3"> 
                <label class="form-label" for="lessonTime">Lesson Time</label>
                <input class="form-control" type="text" name="lessonTime" id="" value="Sat. 10:15">
            </div> 
            <div class="mb-3"> 
                <label class="form-label" for="startDate">Start date</label>
                <input class="form-control" type="text" name="startDate" id="" value="Apr. 2020">    
            </div> 
            <div class="text-center">
                <input class="btn btn-primary mb-3" type="submit" value="UPDATE">
            </div> 
        </form>
    </section>
        <?php include "includes/footer.php" ?>
