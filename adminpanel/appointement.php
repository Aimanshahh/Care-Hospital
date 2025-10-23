<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Appointment</h6>
                            <form class="forms-sample" action="appointementaction.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Appointment Service</label>

                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="service">
                     <?php
                     require "connection.php";
                     $qry = "SELECT * FROM `service`";
                     $result = mysqli_query($conn, $qry);
                     while($opt = mysqli_fetch_assoc($result)){
                       ?>
<option value="<?php echo $opt["service_id"];?>"><?php echo $opt["servicename"];?></option>
                       <?php
                        }
                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                                        <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Doctor</label>

                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="doctor">
                     <?php
                     require "connection.php";
                     $qry = "SELECT * FROM `doctor`";
                     $result = mysqli_query($conn, $qry);
                     while($opt = mysqli_fetch_assoc($result)){
                       ?>
<option value="<?php echo $opt["doctor_id"];?>"><?php echo $opt["doctor_name"];?></option>
                       <?php
                        }
                       ?>
                    </select>
                  </div>
                  <label for="exampleInputName1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name"
                                        >
                                        <label for="exampleInputName1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="email"
                                        >
                                        <label for="exampleInputName1" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="exampleInputName1" name="date"
                                        >
                                        <label for="exampleInputName1" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="exampleInputName1" name="time"
                                        >
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>