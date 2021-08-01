<?php include 'link_inc.php';?>
<?php include 'header_inc.php';?>

<style>
  .all-title-box{
     background: url("img/slider-1.jpg") no-repeat center center;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -ms-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
     text-align: center;
     background-attachment: fixed;
     padding: 70px 0px;
     position: relative;
}

</style>

<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
     
<!-- gallery -->
      <div  class="gallery mb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                     <div class="titlepage text_align_center ">
                        <h2> Gallery</h2>
                        <p style="margin-top: -8px;">some pictures provide by RO-RO service of ssk devcon..</p>
                     </div>
                  </div>
            </div>
            <div class="row">
               <div class="tz-gallery">
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/tr-1.jpg">
                           <img src="img/tr-1.jpg" alt="Bridge">
                           </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/tr-2.jpg">
                           <img src="img/tr-2.jpg" alt="Bridge">
                           </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/tr-3.jpg">
                           <img src="img/tr-3.jpg" alt="Bridge">
                           </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/tr-4.jpg">
                           <img src="img/tr-4.jpg" alt="Bridge">
                           </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/ro-ro.jpg">
                           <img src="img/ro-ro.jpg" alt="Bridge">
                           </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <a class="gallery_img" href="img/about-5.jpg">
                           <img src="img/about-5.jpg" alt="Bridge">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script>
         baguetteBox.run('.tz-gallery');
      </script>

<?php include 'footer_inc.php';?>
<?php include 'footer_script.php';?>
