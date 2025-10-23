<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Service Show</h6>
                          
                                <table class="table">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Service </th>
                                    <th> Price </th>
                                    <th> Image </th>

                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `service`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['service_id'] ?></td>
                          <td class="py-1"><?php echo $row['servicename'] ?></td>
                          <td class="py-1"><?php echo $row['serviceprice'] ?></td>
                          <td><img class="rounded-circle" src="<?php echo $row['service_img']?>" alt="Service Image" style="width: 40px; height: 40px;"></td>



                          <td> 
                          <a href="serviceupdate.php?updid=<?php echo $row['service_id'] ?>">

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          <a href="servicedelete.php?dltid=<?php echo $row['service_id']?>">
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