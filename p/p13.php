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
                  <img src="/assets/portfolio/BDTax/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BDTax/9.png" alt="">
                </div>

               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: BDTax Mobile Application</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2021-22</li>
                <li><strong>IOS App URL</strong>: <a target="_blank" href="https://apps.apple.com/us/app/bdtax-tax-return-online-bd/id6444408079">https://apps.apple.com/us/app/bdtax-tax-return-online-bd/id6444408079</a></li>
                <li><strong>Android App URL</strong>: <a target="_blank" href="https://play.google.com/store/apps/details?id=com.bdtaxbd.app&hl=en&gl=US">https://play.google.com/store/apps/details?id=com.bdtaxbd.app&hl=en&gl=US</a></li>
                <li><strong>Tech Stack</strong>: React Native, Laravel Rest API, MySQL, Bkash, SSL Payment gateway</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
            <h5>Overview:</h5>
    <p>
        The "BDTax Mobile Application" is a cross-platform mobile app designed to simplify tax management for users. 
        The app offers a secure and user-friendly experience with features like seamless authentication, payment integration, and dynamic content handling. 
        It ensures efficient collaboration among development teams and streamlined release management.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>User Interface Development:</strong>
            <ul>
                <li>Designed and developed an intuitive user interface using React Native.</li>
            </ul>
        </li>
        <li>
            <strong>Authentication System:</strong>
            <ul>
                <li>Implemented user registration and login functionality.</li>
                <li>Integrated JWT (JSON Web Token) authentication for secure user access.</li>
            </ul>
        </li>
        <li>
            <strong>Payment Processing:</strong>
            <ul>
                <li>Implemented a checkout system using Bkash Payment Gateway and SSL Payment Gateway for secure transactions.</li>
            </ul>
        </li>
        <li>
            <strong>API Integration:</strong>
            <ul>
                <li>Integrated Laravel REST API to fetch and display dynamic content.</li>
            </ul>
        </li>
        <li>
            <strong>Team Collaboration and Mentoring:</strong>
            <ul>
                <li>Provided technical mentoring to train new and existing staff.</li>
                <li>Performed code reviews to maintain high-quality code standards.</li>
                <li>Collaborated with onshore and offshore teams for seamless project execution.</li>
            </ul>
        </li>
        <li>
            <strong>Release Management:</strong>
            <ul>
                <li>Prepared release plans and submitted necessary requests for app releases.</li>
            </ul>
        </li>
        <li>
            <strong>Team Leadership:</strong>
            <ul>
                <li>Managed a development team, ensuring the timely delivery of high-quality features.</li>
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
        <li>Successfully developed and deployed a cross-platform mobile application for tax management.</li>
        <li>Delivered a secure and efficient payment processing system using Bkash and SSL Payment Gateway integrations.</li>
        <li>Enhanced team productivity and skillsets through effective mentoring and code reviews.</li>
        <li>Ensured a seamless user experience with secure authentication and dynamic API integration.</li>
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