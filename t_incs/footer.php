    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6">
            <h5 class="text-white mb-4">
              <img
                class="img-fluid me-3" style="text-weight= "
                src="<?php echo $dir;?>img/logo.png"
                alt=""
              /><?php echo $company; ?>
            </h5>
            <p>
               <?php echo $company; ?> help adults with disabilities maximize their quality of life and achieve the independence they crave.
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square me-1" href="<?php echo $company_facebook; ?>" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square me-1" href="<?php echo $company_twitter; ?>" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i><?php echo $company_address; ?>
            </p>
            <p><i class="fa fa-phone-alt me-3"></i><?php echo $company_phone; ?></p>
            <p><i class="fa fa-envelope me-3"></i><?php echo $company_email; ?></p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Do you want to get daily tips of servies we offer?</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="<?php echo $dir;?>"><?php echo $company; ?></a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              Designed By <a href="mailto:dclr.tech@gmail.com">Renasteredev & DCLR</a> 
             
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>