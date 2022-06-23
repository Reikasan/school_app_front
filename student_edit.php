<?php include "includes/header.php"; ?>
<?php 
    if(!$session->is_signed_in()) { redirect("login.php"); } 
    $session->unset_displayedMonth();
?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <section id="back" class="mt-3">
        <a href="student.php"><i class="fas fa-angle-left me-1"></i>Back</a>
    </section>
    <section class="text-center mb-3">
            <div class="img-container col-4 offset-4 pr-1 my-3">
                <img class="img-fluid" src="img/brooke-cagle-rPgFF8vJ5vU-unsplash.jpg" alt="profile photo">
                <div class="col-3 photo-upload" data-bs-toggle="tooltip" data-bs-placement="top" title="change the photo">
                    <i class="fas fa-pen"></i>
                </div>
            </div>
            <h1 class="fw-bold">Reika Akuzawa</h1>
    </section>
    <section class="mb-3">
        <form action="" method="post">
            <div id="basicInfo">
                <h1>Basic Infos</h1>
                <div class="mb-3 row">
                    <label class="form-label col-3" for="birthday">Birthday</label>
                    <div class="col-9">
                        <input class="form-control" type="date" name="birthday" id="" value="1984-06-18">
                    </div>
                </div>
                <div class="mb-3 row"> 
                    <label class="form-label col-3" for="tel">Tel.</label>
                    <div class="col-9">
                        <input class="form-control" type="tel" name="tel" id="">
                    </div>
                </div> 
                <div class="mb-3 row">      
                    <label class="form-label col-3" for="email">Email</label>
                    <div class="col-9">
                        <input class="form-control" type="text" name="email" id="" value="l06981@gmail.com">
                    </div>
                </div> 
            </div>
            <div id="courseInfo">
                <h1>Course Infos</h1>
                <div class="mb-3 row"> 
                    <label class="form-label col-3" for="class">Class</label>
                    <div class="col-9">
                        <select class="form-control" name="class" id="">
                            <option value="kids1">Kids 1</option>
                            <option value="kids2">Kids 2</option>
                            <option value="basic">Basic</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="upper">Upper</option>
                            <option value="professional">Professional</option>
                        </select>
                    </div>
                </div> 
                <div class="mb-3 row"> 
                    <label class="form-label col-3" for="lessonTime">Lesson Time</label>
                    <div class="col-9 row">
                        <div class="col-6">
                            <select class="form-control" name="lessonDay" id="">
                                <option value="mon">Monday</option>
                                <option value="tue">Tuesday</option>
                                <option value="wed">Wednesday</option>
                                <option value="thu">Thursday</option>
                                <option value="fri">Friday</option>
                                <option value="sat" selected>Saturday</option>
                                <option value="sun">Sunday</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="lessonTime" id="" value="10:15">
                        </div>
                    </div> 
                </div> 
                <div class="mb-3 row"> 
                    <label class="form-label col-3" for="startDate">Start date</label>
                    <div class="col-9">
                        <input class="form-control" type="text" name="startDate" id="" value="Apr. 2020">  
                    </div>
                </div> 
            </div>
            
            <div class="text-center mt-4">
                <input class="btn btn-primary col-6" type="submit" value="UPDATE">
            </div> 
        </form>
    </section>
        <?php include "includes/footer.php" ?>
