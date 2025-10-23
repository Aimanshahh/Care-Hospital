<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">User Add </h6>
                            <form class="forms-sample" action="useraddaction.php" method="POST"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="useraddname"
                                        >
                                        <label for="exampleInputName1" class="form-label">User Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="usermail"
                                        >
                                       
                                        <label for="exampleInputName1" class="form-label">User Phone</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="userphn"
                                        >
                                        <label for="exampleInputName1" class="form-label">User Address </label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="useraddress"
                                        >
                                        <label for="exampleInputName1" class="form-label">User img</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="imgadd"
                                        >
        
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>