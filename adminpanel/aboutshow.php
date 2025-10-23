<?php
include "header.php";
?>
  <div class="container-fluid pt-4 px-4">
                    <div class=" mt-3 mb-3 mx-3  table table-dark table-striped">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">About Show</h6>
                          
                                <table class="table">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Heading </th>
                                    <th> Sologan</th>
                                    <th> Description  </th>
                                 </tr>
                                </thead>
                                <tbody>
                        <?php 
                        require "connection.php";
                        $qry = "SELECT * FROM `about`";
                        $res = mysqli_query($conn, $qry);

                        while ($row =mysqli_fetch_assoc($res)){
                          ?>
                        <tr>
        
                          <td class="py-1"><?php echo $row['about_id'] ?></td>
                          <td class="py-1"><?php echo $row['heading1'] ?></td>
                          <td class="py-1"><?php echo $row['sologan'] ?></td>
                          <td class="py-1"><?php echo $row['description'] ?></td>


                          <td> 
                          <a href="newsupdate.php?updid=<?php echo $row['about_id'] ?>">

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">Update</button>
                          <a href="aboutdelete.php?dltid=<?php echo $row['about_id']?>">
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