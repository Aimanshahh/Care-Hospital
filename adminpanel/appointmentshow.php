<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Appointment Show</h6>
                          
                                <table class="table">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Service </th>
                                    <th> Doctor </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> date </th>
                                    <th> time </th>

                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `appointment1`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
                        <!-- INSERT INTO `appointment1`(`appointment_id`, `sevice_fk`, `doctor_fk`, `appointment_name`, `appointment_email`, `appointment_date`, `appointment_time`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]') -->
                          <td class="py-1"><?php echo $row['appointment_id'] ?></td>
                          <td class="py-1">
                          <?php
                            // Fetch category name based on fk_id
                            // INSERT INTO `role`(`role_id`, `role_name`)     
                            $Id = $row['sevice_fk'];
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
                           </td>
                          <td class="py-1">
                          <?php
                            // Fetch category name based on fk_id
                            // SELECT `doctor_id`, `doctor_name`, `service_fk`, `fee`, `doctor_img` FROM `doctor`   
                            $Id = $row['doctor_fk'];
                            $Query = "SELECT `doctor_name` FROM `doctor` WHERE `doctor_id` = $Id";
                            $Result = mysqli_query($conn, $Query);

                            // Check if a row was found
                            if (mysqli_num_rows($Result) > 0) {
                              $Row = mysqli_fetch_assoc($Result);
                              echo $Row["doctor_name"];
                            } else {
                              echo " not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                          </td>
                          <td class="py-1"><?php echo $row['appointment_name'] ?></td>
                          <td class="py-1"><?php echo $row['appointment_email'] ?></td>
                          <td class="py-1"><?php echo $row['appointment_date'] ?></td>
                          <td class="py-1"><?php echo $row['appointment_time'] ?></td>


                          <td> 
                          <a href="contactupdate.php?updid=<?php echo $row['appointment_id'] ?>">

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          <a href="appointmentdlt.php?dltid=<?php echo $row['appointment_id']?>">
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