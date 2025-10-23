<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Contact Show</h6>
                          
                                <table class="table">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Subject </th>
                                    <th> Message </th>
                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `contact`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['contact_id'] ?></td>
                          <td class="py-1"><?php echo $row['contact_name'] ?></td>
                          <td class="py-1"><?php echo $row['contact_email'] ?></td>
                          <td class="py-1"><?php echo $row['contact_subject'] ?></td>
                          <td class="py-1"><?php echo $row['contact_message'] ?></td>

                          <td> 
                          <a href="contactupdate.php?updid=<?php echo $row['contact_id'] ?>">

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          <a href="contactdelete.php?dltid=<?php echo $row['contact_id']?>">
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