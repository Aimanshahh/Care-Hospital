<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Doctor Show</h6>
    
                                <table class="table">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Service </th>
                                    <th> Image</th>
                                    <th> Fee</th>


                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `doctor`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td><?php echo $row['doctor_id'] ?></td>
                          <td><?php echo $row['doctor_name'] ?></td>
                          <td>      <?php
                            // Fetch category name based on fk_id
                            // INSERT INTO `role`(`role_id`, `role_name`)     
                            $Id = $row['service_fk'];
                            $Query = "SELECT `servicename` FROM `service` WHERE `service_id` = $Id";
                            $Result = mysqli_query($conn, $Query);

                            // Check if a row was found
                            if (mysqli_num_rows($Result) > 0) {
                              $Row = mysqli_fetch_assoc($Result);
                              echo $Row["servicename"];
                            } else {
                              echo " not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                            <?php echo $row['service_fk'] ?></td>
                          <td><img class="rounded-circle" src="<?php echo $row['doctor_img']?>" alt="Doctor Image" style="width: 40px; height: 40px;"></td>
                          <td><?php echo $row['fee'] ?></td>

                          <td> 
                          <a href="doctorupdate.php?updid=<?php echo $row['doctor_id']?>">

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          <a href="doctordelete.php?dltid=<?php echo $row['doctor_id']?>">
                          <button type="button" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                        </td>
                        </tr>
                        <?php } ?>


                      </tbody>
                                </table>
                            </div>
                   
                    </div>
                        </div>



<?php
include "footer.php";
?>