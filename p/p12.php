<?php include_once "../header.php"; ?>

<body class="portfolio-details-page">

  <?php include_once "../sidebar.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/R3Medical/8.png" alt="">
                </div>

               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: R3 Medical Training Mobile Application</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2019-20</li>
                <li><strong>IOS App URL</strong>: <a target="_blank" href="https://apps.apple.com/us/app/r3-medical-training/id1513824204">https://apps.apple.com/us/app/r3-medical-training/id1513824204</a></li>
                <li><strong>Android App URL</strong>: <a target="_blank" href="https://play.google.com/store/apps/details?id=com.r3medicaltraining.app2">https://play.google.com/store/apps/details?id=com.r3medicaltraining.app2</a></li>
                <li><strong>Tech Stack</strong>: React Native, Wordpress Rest API, MySQL, Stripe Payment gateway</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
    <h5>Overview:</h5>
    <p>
        The "R3 Medical Training Mobile Application" is a cross-platform mobile application designed to facilitate medical training for professionals. 
        The app features seamless user interaction, secure authentication, and an integrated checkout system for payment processing. 
        It provides an intuitive interface for users to access training materials, manage accounts, and complete transactions efficiently.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>User Interface Development:</strong>
            <ul>
                <li>Designed and developed an intuitive user interface using React Native for seamless navigation and interaction.</li>
            </ul>
        </li>
        <li>
            <strong>Authentication System:</strong>
            <ul>
                <li>Implemented user registration and login functionality.</li>
                <li>Integrated JWT (JSON Web Token) authentication for secure access to resources.</li>
            </ul>
        </li>
        <li>
            <strong>Payment Processing:</strong>
            <ul>
                <li>Developed a checkout system using the Stripe Payment Gateway for secure card payments.</li>
            </ul>
        </li>
        <li>
            <strong>API Integration:</strong>
            <ul>
                <li>Integrated WordPress REST API to fetch and display training-related content dynamically.</li>
            </ul>
        </li>
        <li>
            <strong>Team Collaboration and Mentoring:</strong>
            <ul>
                <li>Provided technical mentoring to train new and existing staff.</li>
                <li>Performed code reviews to ensure quality and consistency.</li>
                <li>Coordinated with the onshore team and other teams for project alignment.</li>
            </ul>
        </li>
        <li>
            <strong>Release Management:</strong>
            <ul>
                <li>Prepared release plans and handled all necessary tasks for app releases.</li>
            </ul>
        </li>
        <li>
            <strong>Team Leadership:</strong>
            <ul>
                <li>Managed a development team, ensuring timely delivery and adherence to project goals.</li>
            </ul>
        </li>
        <li>
            <strong>App Deployment:</strong>
            <ul>
                <li>Published the Android version on the Google Play Store and the iOS version on the Apple App Store.</li>
            </ul>
        </li>
    </ul>

    <h5>Achievements:</h5>
    <ul>
        <li>Successfully deployed a fully functional mobile application on both Android and iOS platforms.</li>
        <li>Delivered a robust and user-friendly interface with secure payment processing capabilities.</li>
        <li>Streamlined team collaboration and improved technical proficiency within the team through effective mentoring.</li>
        <li>Provided a seamless experience by integrating dynamic content from WordPress REST API into the mobile application.</li>
    </ul>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php include_once "../footer.php"; ?>

</body>

</html>