<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">user Show</h6>
                          
                                <table class="table">
                                <thead>
                                 <tr>
                                 <!-- INSERT INTO `user`(`user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img`) -->
                                    <th> ID </th>
                                    <th> User Name </th>
                                    <th> User Email </th>
                          
                                    <th> role_FK </th>
                                    <th> Image </th>
                                    <th> Action </th>


                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `user`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['user_id'] ?></td>
                          <td class="py-1"><?php echo $row['user_name'] ?></td>
                          <td class="py-1"><?php echo $row['email'] ?></td>
                          <td class="py-1">
                          
                            <?php
                            // Fetch category name based on fk_id
                            // INSERT INTO `role`(`role_id`, `role_name`)     
                            $Id = $row['role_FK'];
                            $Query = "SELECT `role_name` FROM `role` WHERE `role_id` = $Id";
                            $Result = mysqli_query($conn, $Query);

                            // Check if a row was found
                            if (mysqli_num_rows($Result) > 0) {
                              $Row = mysqli_fetch_assoc($Result);
                              echo $Row["role_name"];
                            } else {
                              echo " not found"; // or handle the absence of category as per your logic
                            }

                            ?>
                        </td>
                          <td><img class="rounded-circle" src="<?php echo $row['user_img']?>" alt="user Image" style="width: 40px; height: 40px;"></td>



                          <td> 
                          <a href="userupdate.php?updid=<?php echo $row['user_id'] ?>">
                          <a href="userdelete.php?dltid=<?php echo $row['user_id']?>">
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