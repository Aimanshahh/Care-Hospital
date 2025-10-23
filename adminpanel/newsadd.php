<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">News Add </h6>
                            <form class="forms-sample" action="newsaddaction.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">News Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="newstitleadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Content</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="newscontentadd"
                                        >
                                        <label for="exampleInputName1" class="form-label">Date Posted</label>
                                    <input type="date" class="form-control" id="exampleInputName1" name="newsdateadd"
                                        >
                               
        
                                </div><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>



<?php
include "footer.php";
?>