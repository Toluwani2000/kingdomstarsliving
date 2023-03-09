<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
      require_once("t_conn/url.php");
      require_once("t_conn/dbc.php");
      //meta info
        $page_name="Kingdom star living";
        $page_desc="";
        $page_img="".$dir."img/logo-meta.jpg";
        $page_author="$company";
        // $page_keywords="".$company.", $page_name, $page_desc, ".$company."', ".$company_motto."";
        $page_url="".$dir."";
          //end meta info
        require_once("t_incs/functions.php");
      require_once("t_incs/metas.php");
      require_once("t_incs/scripts-top.php");
    ?>
  </head>

  <body>
   <?php 
    require_once("t_incs/nav.php");
   ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="<?php echo $dir; ?>img/autism 1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                     PROVIDING CARE SERVICES TO THE PHYSICALLY CHALLENGED AND THE AGED
                    </h1>
                    <!--<p class="fs-5 text-white mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="<?php echo $dir; ?>img/autism 2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      WE ARE CONCERNED ABOUT YOU
                    </h1>
                    <!--<p class="fs-5 text-white mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="<?php echo $dir; ?>img/image-2.jpg"
                alt=""
                style="object-fit: cover"
              />
              
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                Disabled Living in Maryland
              </h1>
              <p class="fs-5 text-primary mb-4">
                  <?php echo $company; ?> helps adults with disabilities maximize their quality of life and achieve the independence they crave.

                    Our disability care services help with everything your loved one needs to live more independently. We give adults living with a disability the support and confidence to live safely and comfortably at home, and we do our best to help them find joy each day.
                    
                    Whether it’s an eldery individual, disabled veteran, or someone with physical limitations, our disability care services can help them overcome challenges in their daily lives.
              </p>
              <!--<div class="row g-4 mb-4">-->
              <!--  <div class="col-sm-6">-->
              <!--    <div class="d-flex align-items-center">-->
              <!--      <img-->
              <!--        class="flex-shrink-0 me-3"-->
              <!--        src="<?php echo $dir; ?>img/icon/icon-04-primary.png"-->
              <!--        alt=""-->
              <!--      />-->
              <!--      <h5 class="mb-0">Flexible Support Programs</h5>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-sm-6">-->
              <!--    <div class="d-flex align-items-center">-->
              <!--      <img-->
              <!--        class="flex-shrink-0 me-3"-->
              <!--        src="<?php echo $dir; ?>img/icon/icon-03-primary.png"-->
              <!--        alt=""-->
              <!--      />-->
              <!--      <h5 class="mb-0">Best care Guarantee</h5>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<p class="mb-4">-->
              <!--  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.-->
              <!--  Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,-->
              <!--  sed stet lorem sit clita duo justo magna dolore erat amet-->
              <!--</p>-->
              <!--<div class="border-top mt-4 pt-4">-->
              <!--  <div class="d-flex align-items-center">-->
              <!--    <img-->
              <!--      class="flex-shrink-0 rounded-circle me-3"-->
              <!--      src="<?php echo $dir; ?>img/profile.jpg"-->
              <!--      alt=""-->
              <!--    />-->
              <!--    <h5 class="mb-0">Call Us: +240 413 5059</h5>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <!-- <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">Our Mission</h1>
              <p class="text-light mb-5">
                Therefore, acting with the strength of these guiding principles: 
                We strive to provide positive living, working, and learning environments 
                that acknowledge the uniqueness of each person and foster their contributions
                 as valued members of the community 
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5 bg-light ">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Our care givers are certified in CPR, Fall Prevention and First Aid. They are up-to-date with the ever changing medical world.
                    Our Personal, home and nursing support services include:
                    Bath, shaving and showering brushing of teeth assistance.
                    Ensure medications are adhered to as prescribed.
                    Housekeeping, changing linens and laundry.
                    Incontinence care.
                    Handling logistics e.g. social activities, therapy appointments and Doctors appointments.
              </p>
              <p>We also care for:
              <ul>
                 <li>
                  loved ones living with Alzheimer’s, dementia, Parkinson’s, multiple sclerosis.
                </l
                <li>loved ones who are paralyzed or disabled.</li>
                <li>Loved ones who have mental or physical limitations including epilepsy, blindness, Autism, and more.</li>
              </ul>
              </p>
            </p>
        </div>
          <!--  <div class="row g-3">-->
          <!--    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">-->
          <!--      <div class="bg-light rounded h-100 p-3">-->
          <!--        <div-->
          <!--          class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"-->
          <!--        >-->
          <!--          <img-->
          <!--            class="align-self-center mb-3"-->
          <!--            src="<?php echo $dir; ?>img/icon/icon-06-primary.png"-->
          <!--            alt=""-->
          <!--          />-->
          <!--          <h5 class="mb-0">Security for the elderly</h5>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">-->
          <!--      <div class="bg-light rounded h-100 p-3">-->
          <!--        <div-->
          <!--          class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"-->
          <!--        >-->
          <!--          <img-->
          <!--            class="align-self-center mb-3"-->
          <!--            src="<?php echo $dir; ?>img/icon/icon-03-primary.png"-->
          <!--            alt=""-->
          <!--          />-->
          <!--          <h5 class="mb-0">Serene Enviroment</h5>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">-->
          <!--      <div class="bg-light rounded h-100 p-3">-->
          <!--        <div-->
          <!--          class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"-->
          <!--        >-->
          <!--          <img-->
          <!--            class="align-self-center mb-3"-->
          <!--            src="<?php echo $dir; ?>img/icon/icon-04-primary.png"-->
          <!--            alt=""-->
          <!--          />-->
          <!--          <h5 class="mb-0">Policy Controlling</h5>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">-->
          <!--      <div class="bg-light rounded h-100 p-3">-->
          <!--        <div-->
          <!--          class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"-->
          <!--        >-->
          <!--          <img-->
          <!--            class="align-self-center mb-3"-->
          <!--            src="<?php echo $dir; ?>img/icon/icon-07-primary.png"-->
          <!--            alt=""-->
          <!--          />-->
          <!--          <h5 class="mb-0">Money Saving</h5>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="<?php echo $dir; ?>img/autism 4.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            We Provide professional Support Services
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-10-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Residential Support</h4>
              </div>
              <p class="mb-4">
                We also care for:
                - loved ones living with Alzheimer’s, dementia, Parkinson’s, multiple sclerosis.
                - loved ones who are paralyzed or disabled.
                
                - Loved ones who have mental or physical limitations including epilepsy, blindness, Autism, and more.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-01-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Personal Support </h4>
              </div>
              <p class="mb-4">
                Bath, shaving and showering brushing of teeth assistance. Housekeeping, changing linens and laundry.Incontinence care.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-05-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Nursing Support</h4>
              </div>
              <p class="mb-4">
            Medication management, wound care, and handling logistics for social activities, therapy appointments and Doctors appointments.
              </p>
            </div>
          </div>
         <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-08-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Personal Support</h4>
              </div>
              <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-07-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Clothing Insurance</h4>
              </div>
              <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="<?php echo $dir; ?>img/icon/icon-06-light.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Property Insurance</h4>
              </div>
              <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">
             Our Mission
            </h1>
            <p class="text-white mb-5">
              Therefore, acting with the strength of these guiding principles: We strive to provide positive living, working, and learning environments that acknowledge the uniqueness of each person and foster their contributions as valued members of the community.
            </p>
            <div class="bg-white rounded p-3">
              <div class="d-flex align-items-center bg-primary rounded p-3">
                <img
                  class="flex-shrink-0 rounded-circle me-3"
                  src="<?php echo $dir; ?>img/profile.jpg"
                  alt=""
                />
                <h5 class="text-white mb-0">Call Us:  <?php echo $company_phone;?></h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <form id="form" method="POST">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Name"
                      />
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email"
                      />
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        name="subject"
                        placeholder="Subject"
                      />
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                        name="message"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" id="submit" name="submit" type="submit">
                      Get Appointment
                    </button>
                  </div>
                </div>
              </form>
              <div id="formresult"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?php echo $dir; ?>img/team-1.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Elijah Taiwo</h5>
                <span>CEO</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Elijah Taiwo</h5>
                <p>CEO</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?php echo $dir; ?>img/team-2.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?php echo $dir; ?>img/team-3.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?php echo $dir; ?>img/team-4.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
   <!--   <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">What They Say About Our Support</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-left h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="<?php echo $dir; ?>img/testimonial-1.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="<?php echo $dir; ?>img/testimonial-2.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="<?php echo $dir; ?>img/testimonial-3.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-right h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="<?php echo $dir; ?>img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonial End -->

    <?php 
      require_once('t_incs/footer.php');
      require_once('t_incs/scripts-bottom.php');
    ?>
    <script>
      $(document).ready(function(){
				var form = $('#form');
				var submit = $('#submit');
				var submit_val = submit.html();
				var formresult = $('#formresult');
				form.on('submit',(function(e){
					e.preventDefault();
					submit.attr('disabled','');
					submit.html('Processing...');
					formresult.html('Taking too long? <a href="">Reload</a>');
					$.ajax({
            url:"process.php",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(result){
                formresult.html(result);
                submit.removeAttr('disabled');
                submit.html('Sent');
            }
					});
				}));
			});
    </script>
  </body>
</html>
