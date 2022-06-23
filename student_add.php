<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <section class="text-center mb-3">
            <div class="img-container col-4 offset-4 pr-1 my-3">
                <img class="img-fluid" src="img/blank-profile-picture-973460_640.png" alt="placeholder photo">
                <div class="col-3 photo-upload" data-bs-toggle="tooltip" data-bs-placement="top" title="Upload a photo">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            
            
    </section>
    <section class="mb-3">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="birthday">Birthday</label>
                <input class="form-control" type="date" name="birthday" id="">
            </div>
            <div class="mb-3"> 
                <label class="form-label" for="tel">Tel.</label>
                <input class="form-control" type="tel" name="tel" id="">
            </div> 
            <div class="mb-3">      
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="" >
            </div> 
            <div class="mb-3"> 
                <label class="form-label" for="class">Class</label>
                <select class="form-control" name="class" id="">
                    <option value="">Select course</option>
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
                <input class="form-control" type="text" name="lessonTime" id="">
            </div> 
            <div class="mb-3"> 
                <label class="form-label" for="startDate">Start date</label>
                <input class="form-control" type="text" name="startDate" id="" >    
            </div> 
            <div class="text-center">
                <input class="btn btn-primary mb-3 col-4" type="submit" value="ADD">
            </div> 
        </form>
    </section>
        <?php include "includes/footer.php" ?>
