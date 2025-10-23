<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Testimonal Add </h6>
                            <form class="forms-sample" action="testimonaladdaction.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Testimonal Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="testname"
                                        >
                                        <label for="exampleInputName1" class="form-label">Testimonal Description</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="testdesc"
                                        >
                                        <label for="exampleInputName1" class="form-label">Testimonal Image</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="testiimg"
                                        >
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>