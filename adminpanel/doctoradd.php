<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Doctor Add </h6>
                            <form class="forms-sample" action="doctoraddaction.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Doctor Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="doctornameadd"
                                        >
                                        <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Doctor Service</label>

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
                  <label for="exampleInputName1" class="form-label">Doctor Fee</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="doctorfee"
                                        >
                                        <label for="exampleInputName1" class="form-label">Doctor Image</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="doctorimgadd"
                                        >


                               
        
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>