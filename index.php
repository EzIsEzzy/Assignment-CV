<?php include "CVInfo.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Esmail Ali - CV</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/FB_IMG_1724511662439.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.php" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename"><?php print_r($data['name']); ?></h1>
    </a>

    <div class="social-links text-center">
      <a href="<?php print_r($data['contacts']['3']['link']) ?>" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="<?php print_r($data['contacts']['2']['link']) ?>" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="<?php print_r($data['contacts']['1']['link']) ?>" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="<?php print_r($data['contacts']['0']['link']) ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/FB_IMG_1724511662439.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2><?php print_r($data['name']); ?></h2>
        <p>I'm <span class="typed" data-typed-items="Graphic Designer, Web Developer, IT Undergraduate, Photographer">Graphic Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p><?php print_r($data['description']); ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/FB_IMG_1724511662439.jpg" class="img-fluid rounded-2" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php print_r($data['education'][0]['description_degree']); ?></h2>
            <p class="fst-italic py-3">
              Studies in <?php print_r($data['education'][0]['name']); ?> from <?php print_r($data['education'][0]['from_date']); ?> all the way to <?php print_r($data['education'][0]['to_date']); ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php print_r($data['birth_date']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php print_r($data['contacts'][4]['name']); ?></strong> <span><?php print_r($data['contacts'][4]['number']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php print_r($data['city']);?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php print_r($data['age']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php print_r($data['education'][0]['degree']); ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php print_r($data['contacts']['5']['email']); ?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span><?php print_r($data['Skills']['0']['name']); ?></span> <i class="val"><?php print_r($data['Skills']['0']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['Skills']['0']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['Skills']['1']['name']); ?></span> <i class="val"><?php print_r($data['Skills']['1']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['Skills']['1']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['Skills']['2']['name']); ?></span> <i class="val"><?php print_r($data['Skills']['2']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['Skills']['2']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span><?php print_r($data['Skills']['3']['name']); ?></span> <i class="val"><?php print_r($data['Skills']['3']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['Skills']['3']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['Skills']['4']['name']); ?></span> <i class="val"><?php print_r($data['Skills']['4']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['Skills']['4']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Technologies Used</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['0']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['0']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['0']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['1']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['1']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['1']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['2']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['2']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['2']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['3']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['3']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['3']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['4']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['4']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['4']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['technologies_used']['5']['name']); ?></span> <i class="val"><?php print_r($data['technologies_used']['5']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['technologies_used']['5']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Technologies Used Item -->

          </div>

        </div>

      </div>

    </section><!-- /Technologies Used Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Languages</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span><?php print_r($data['languages']['0']['name']); ?></span> <i class="val"><?php print_r($data['languages']['0']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['languages']['0']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Languages Item -->

            <div class="progress">
              <span class="skill"><span><?php print_r($data['languages']['1']['name']); ?></span> <i class="val"><?php print_r($data['languages']['1']['level']); echo "%"; ?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php print_r($data['languages']['1']['level']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Languages Item -->

          </div>

        </div>

      </div>

    </section><!-- /Languages Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4><?php print_r($data['education']['0']['description_degree'])?></h4>
              <h5><?php print_r($data['education']['0']['from_date'])?> to <?php print_r($data['education']['0']['to_date'])?></h5>
              <p><em><?php print_r($data['education']['0']['name'])?></em></p>
              <p><?php print_r($data['education']['0']['brief_description'])?></p>
            </div><!-- Edn Resume Item -->
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Companies</h3>
            <div class="resume-item">
              <h4><?php print_r($data['companies']['0']['name'])?></h4>
              <h5><?php print_r($data['companies']['0']['from_date'])?> to <?php print_r($data['companies']['0']['to_date'])?></h5>
              <p><em><?php print_r($data['companies']['0']['location'])?></em></p>
              <ul>
                <li><?php print_r($data['companies']['0']['achievements']['0']) ?></li>
                <li><?php print_r($data['companies']['0']['achievements']['1']) ?></li>
                <li><?php print_r($data['companies']['0']['achievements']['2']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Courses</h3>
            <div class="resume-item">
              <h4><?php print_r($data['courses']['0']['name'])?></h4>
              <h5><?php print_r($data['courses']['0']['from_date'])?> to <?php print_r($data['courses']['0']['to_date'])?></h5>
              <p><em><?php print_r($data['courses']['0']['company'])?></em></p>
              <ul>
                <li><?php print_r($data['courses']['0']['description']['0']) ?></li>
                <li><?php print_r($data['courses']['0']['description']['1']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"> <br><br><br>
            <div class="resume-item">
              <h4><?php print_r($data['courses']['1']['name'])?></h4>
              <h5><?php print_r($data['courses']['1']['from_date'])?> to <?php print_r($data['courses']['1']['to_date'])?></h5>
              <p><em><?php print_r($data['courses']['1']['company'])?></em></p>
              <ul>
                <li><?php print_r($data['courses']['1']['description']['0']) ?></li>
                <li><?php print_r($data['courses']['1']['description']['1']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"> <br><br><br>
            <div class="resume-item">
              <h4><?php print_r($data['courses']['2']['name'])?></h4>
              <h5><?php print_r($data['courses']['2']['from_date'])?> to <?php print_r($data['courses']['1']['to_date'])?></h5>
              <p><em><?php print_r($data['courses']['2']['company'])?></em></p>
              <ul>
                <li><?php print_r($data['courses']['2']['description']['0']) ?></li>
                <li><?php print_r($data['courses']['2']['description']['1']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->
          </div>
          <div class="col-lg-6"></div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Interns</h3>
            <div class="resume-item">
              <h4><?php print_r($data['interns']['0']['name'])?></h4>
              <h5><?php print_r($data['interns']['0']['from_date'])?> to <?php print_r($data['interns']['0']['to_date'])?></h5>
              <p><em><?php print_r($data['interns']['0']['description_role'])?></em></p>
              <ul>
                <li><?php print_r($data['interns']['0']['description']['0']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"><br><br><br>
            <div class="resume-item">
              <h4><?php print_r($data['interns']['1']['name'])?></h4>
              <h5><?php print_r($data['interns']['1']['from_date'])?> to <?php print_r($data['interns']['1']['to_date'])?></h5>
              <p><em><?php print_r($data['interns']['1']['description_role'])?></em></p>
              <ul>
                <li><?php print_r($data['interns']['1']['description']['0']) ?></li>
              </ul>
            </div><!-- Edn Resume Item -->
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3><?php print_r($data['contacts']['4']['name']) ?></h3>
                  <p><?php print_r($data['contacts']['4']['number']) ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3><?php print_r($data['contacts']['5']['name']) ?></h3>
                  <p><?php print_r($data['contacts']['5']['email']) ?></p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>