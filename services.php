<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Services SQNC</title>

  <!-- Style sheets -->
  <link rel="stylesheet" href="../css/service.css">
  <script src="../js/services.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <!--ubuntu font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"> 
  
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="../text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
  <!--navbar css-->
  <link rel="stylesheet" href="../css/navbar.css">
  <!--Navbar js-->
  <script src="../js/navbar.js"></script>
  <!-- footer -->
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--scroll animation-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <!-- Loading js and css -->
  <link rel="stylesheet" href="../css/loading.css">
  <script type="text/javascript" src="../js/loading.js"></script> 

</head>

<body>
    
    <div class="loader-container">
        <div class="loader"></div>
    </div>

  <div class="container-fluid ct lineanimation" onmouseover="long()" onmouseout="longout()">
    
    <!-- Navigation Bar -->
    <?php
    include_once 'navigation.php';
    ?>

    <!-- Top Mosts image and content -->
    <div class="row servicesrow">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
        <p class="mt-5 heading ml-5" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
          <span class="slog3">Sequence Creators</span>
          <br> 
          <span class="our-ser">OUR SERVICES </span>
          <br>
        </p>
        <div class="line ml-5" id="line" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"></div>
        <br>
        <p class="sub ml-5 mb-5 servicetopcontent" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"> Customized designs and development processes just to furnish the imaginations of our clients. We always endeavor to bring forth only the perfect end products for you. The wide array of services offered allow our clients to achieve everything they need, at the same place.
        </p>
      </div>
    </div>
  </div>
  
  <!-- Ctegories -->
  <div>
    <div class="container bg-white cont services servicecategory">
      <div class="row mt-1">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">

          <!-- UI/UX Designing -->
          <div class=" crd mx-auto bg-white servicecards">
            <center>
              <img src="../images/Usability testing-pana.svg" class="card-img-top servicevectorui" alt="UI/UX Designs">
            </center>
            <div class="card-body bg-transparent">
              <center>
                <h4 class="card-title">UI/UX Design</h4>
              </center>
              <br>
              <center>
                <p class="spara">UI design is not just a design. It is the mirror of the final product.</p>
              </center>
              <center>
                <button class="btn btn-success mt-2 " onclick="mdl1()">Learn more
                  <svg xmlns='http://www.w3.org/2000/svg' class='ionicon uvg' viewBox='1 1 512 512'>
                      <title>Arrow Forward</title>
                      <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M268 112l144 144-144 144M392 256H100' />
                  </svg> 
                </button>
              </center>
            </div>
          </div>
        </div>

        <!-- Web Development -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <div class=" crd mx-auto bg-white" style="width:80%;">
            <center>
              <img src="../images/Developer activity-amico.svg" class="card-img-top devimg" alt="Web Development">
            </center>
            <div class="card-body bg-transparent">
              <center>
                <h4 class="card-title">Web Development</h4>
              </center>
              <br>
              <center>
                <p class="spara">A good website is a good employee that promotes you day and night.</p>
              </center>
              <center> 
                <button class="btn btn-success  mt-2 " onclick="mdl2();">Learn more
                  <svg xmlns='http://www.w3.org/2000/svg' class='ionicon webdevbtn' viewBox='1 1 512 512'>
                      <title>Arrow Forward</title>
                      <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M268 112l144 144-144 144M392 256H100' />
                  </svg>
                </button>
              </center>
            </div>
          </div>
        </div>
      </div>

      <!-- Graphic Designing -->
      <div class="row mt-5">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <div class=" crd mx-auto bg-white graphicdesignerimg">
            <center>
              <img src="../images/Designer-amico.svg" class="card-img-top" style="width: 70%;" alt="Graphic Designing">
            </center>
            <div class="card-body bg-transparent">
              <center>
                <h4 class="card-title">Graphic Designing</h4>
              </center>
              <br>
              <center>
                <p class="spara">Watch your imaginations come true in colors and shapes.</p>
              </center>
              <center> 
                <button class="btn btn-success mt-2 " onclick="mdl3();">Learn more
                  <svg xmlns='http://www.w3.org/2000/svg' class='ionicon graphicbtn' viewBox='1 1 512 512'>
                    <title>Arrow Forward</title>
                    <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M268 112l144 144-144 144M392 256H100' />
                  </svg>
                </button>
              </center>
            </div>
          </div>
        </div>

        <!-- Content Writing -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <div class="crd mx-auto bg-white contentimg">
            <center> 
              <img src="../images/Novelist writing-amico.svg" class="card-img-top" style="width: 70%;" alt="Content Writing">
            </center>
            <div class="card-body bg-transparent">
              <center>
                <h4 class="card-title">Content Writing</h4>
              </center>
              <br>
              <center>
                <p class="spara">Good content is not just some words. It is the language of wisdom. </p>
              </center>
              <center> 
                <button class="btn btn-success  mt-2 " onclick="mdl4()">Learn more 
                  <svg xmlns='http://www.w3.org/2000/svg' class='ionicon contentbtn' viewBox='1 1 512 512'>
                      <title>Arrow Forward</title>
                      <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M268 112l144 144-144 144M392 256H100' />
                  </svg> 
                </button> 
              </center>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--popup1 UI/UX-->
  <div class="container mx-auto">
    <div id="myModal1x" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog">
        <div class="modal-content popupone">
          <div class="modal-header">
            <center>
              <b>
                <h2 class="prptcol text-center"> UI/UX Design</h2>
              </b>
            </center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <!-- <img class="card-img-top" src="..." style="border-radius: 8px;" alt="Card image cap"> -->
            <div class="modal-body">
              <p>We create stunning and interactive UI designs with maximum User Experience to provide you the best quality designs. We are a well-qualified team of designers dedicated to meet your expectations and imaginations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--popup1 end-->

  <!--popup2 Web-->
  <div class="container mx-auto">
    <div id="myModal2x" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog">
        <div class="modal-content popuptwo">
          <div class="modal-header">
            <center>
              <b>
                <h2 class="prptcol text-center">Web Development</h2>
              </b>
            </center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <!-- <img class="card-img-top" src="..." style="border-radius: 8px;" alt="Card image cap"> -->
            <div class="modal-body">
              <p>Need a medium to showcase your products? Our expertise in web development will improve your business through an impressive website. We build highly guaranteed and well-maintained websites with the explicit purpose of supporting your marketing efforts.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--popup2 end-->

  <!--popup3-->
  <div class="container mx-auto">
    <div id="myModal3x" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog">
        <div class="modal-content popupthree">
          <div class="modal-header">
            <center>
              <b>
                <h2 class="prptcol text-center">Graphic Designing</h2>
              </b>
            </center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <!-- <img class="card-img-top" src="..." style="border-radius: 8px;" alt="Card image cap"> -->
            <div class="modal-body">
              <p>From Logo Designs, Illustration, and Flyer Designs to Video Editing, we are ready to meet the standards of your expectation. Our well-trained and passionate designers will work miracles on your dream designs to make them come true.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--popup3 end-->

  <!--popup4 Content-->
  <div class="container mx-auto">
    <div id="myModal4x" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog">
        <div class="modal-content popupfour">
          <div class="modal-header">
            <center>
              <b>
                <h2 class="prptcol text-center">Content Writing</h2>
              </b>
            </center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <!-- <img class="card-img-top" src="..." style="border-radius: 8px;" alt="Card image cap"> -->
            <div class="modal-body">
              <p>A panel of dedicated and hardworking individuals, ready to supply you with the best quality and unique content. Copywriting, Content Writing, Creative Writing, Blog Content, and much more options right here at the same place. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--popup4 end-->

  <!-- Script Tags -->
  </script>
  <!--scroll animation-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!--scroll animation-->

  <!-- Footer -->
  <?php
  include_once 'footer.php';
  ?>


</body>
</html>