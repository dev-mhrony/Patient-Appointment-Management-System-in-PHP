<footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                        <h5 class="mb-lg-4 mb-3">Timing</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">

                                <?php  echo ($row->Timing);?>
                            </li></ul>
                            <h5 class="mb-lg-4 mb-3">Email</h5>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                <?php  echo ($row->Email);?></li>
                                <br>
                                 <h5 class="mb-lg-4 mb-3">Contact Number</h5>
                            <li class="list-group-item d-flex">
                                <?php  echo ($row->MobileNumber);?></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Our Clinic</h5>

                     

                        <p><?php  echo ($row->PageDescription);?></p>
                    </div>
<?php $cnt=$cnt+1;}} ?>
                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-2">Socials</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        
                    </div>

                   

                </div>
            </section>
        </footer>