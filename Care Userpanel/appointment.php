<?php
  include("header.php");
  ?>



    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                            voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr
                            ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form class="forms-sample" action="appointementaction.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="form-group">

                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2"
                                        name="service" placeholder="Service">
                                        <option value="">Select a service</option> <!-- Blank option -->
                                        <?php
    require "connection.php";
    $qry = "SELECT * FROM `service`";
    $result = mysqli_query($conn, $qry);
    while($opt = mysqli_fetch_assoc($result)){
    ?>
                                        <option value="<?php echo $opt["service_id"];?>">
                                            <?php echo $opt["servicename"];?>
                                        </option>
                                        <?php
    }
    ?>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <div class="form-group">

                                        <select class="form-control form-control-lg" id="exampleFormControlSelect2"
                                            name="doctor">
                                            <option value="">Select a doctor</option> <!-- Blank option -->
                                            <?php
    require "connection.php";
    $qry = "SELECT * FROM `doctor`";
    $result = mysqli_query($conn, $qry);
    while($opt = mysqli_fetch_assoc($result)){
    ?>
                                            <option value="<?php echo $opt["doctor_id"];?>">
                                                <?php echo $opt["doctor_name"];?>
                                            </option>
                                            <?php
    }
    ?>
                                        </select>

                                    </div>
                                    <br>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name"
                                        placeholder="Your Name">
                                    <br>
                                    <input type="text" class="form-control" id="exampleInputName1" name="email"
                                        placeholder="Your Email"><br>
                                    <!-- <input type="date" class="form-control" id="exampleInputName1" name="date"
                                        ><br> -->
                                        <input class="form-control" id="exampleInputName1" type="date" name="date" min="2024-07-26" max="2024-08-07">

<!-- 
                                        <script>
    // Get current date
    let today = new Date().toISOString().substr(0, 10);

    // Calculate date 7 days from now
    let oneWeekFromNow = new Date();
    oneWeekFromNow.setDate(oneWeekFromNow.getDate() + 7);
    let maxDate = oneWeekFromNow.toISOString().substr(0, 10);

    // Set current date as the value of the date input (yyyy-mm-dd)
    document.getElementById("abc").value = today;

    // Set minimum and maximum selectable dates
    document.getElementById("abc").min = today;
    document.getElementById("exampleInputName1").max = maxDate;
</script> -->


<br>
                                    <input type="time" class="form-control" id="exampleInputName1" name="time">
                                </div><br>

                                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <!-- <div class="container">
            <div class="bg-primary p-5">
            </div> -->
        </div>
    </div>
    <!-- Newsletter End -->

    <?php
  include("footer.php");
  ?>
