<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Opening Add </h6>
                            <form class="forms-sample" action="openaddaction.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Days</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="dayadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Time</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="timeadd"
                                        >
                               
        
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>