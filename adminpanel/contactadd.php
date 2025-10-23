<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Contact Add </h6>
                            <form class="forms-sample" action="contactaddaction.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactnameadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Contact Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactemailadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="subjectadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Message</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="messageadd"
                                        >
                               
        
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>