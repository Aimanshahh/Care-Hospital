<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">City Add Form</h6>
                            <form class="forms-sample" action="cityaddaction.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">City Add</label>
                                    <input type="cities" class="form-control" id="exampleInputName1" name="cityaddname"
                                        >
                               
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="subb" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>