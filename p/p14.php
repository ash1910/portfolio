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
                  <img src="/assets/portfolio/Vault/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/Vault/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/Vault/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/Vault/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/Vault/5.png" alt="">
                </div>
               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Vault IOS Mobile Application</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2018-19</li>
                <li><strong>IOS App URL</strong>: <a target="_blank" href="https://apps.apple.com/us/app/vault-client/id1504190716">https://apps.apple.com/us/app/vault-client/id1504190716</a></li>
                <li><strong>Tech Stack</strong>: Swift, Laravel Rest API</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
            <h5>Overview:</h5>
    <p>
        The "Vault Mobile Application" is an iOS-based application designed to provide users with a secure and efficient platform for barcode scanning and data management. 
        The app features intuitive navigation, robust authentication mechanisms, and seamless integration with backend APIs, ensuring a reliable and user-friendly experience.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>User Interface Development:</strong>
            <ul>
                <li>Designed and developed a clean, user-friendly interface using Swift.</li>
            </ul>
        </li>
        <li>
            <strong>Authentication System:</strong>
            <ul>
                <li>Implemented secure user registration and login functionality.</li>
                <li>Developed a robust authentication system to ensure data security.</li>
            </ul>
        </li>
        <li>
            <strong>Barcode Scanning:</strong>
            <ul>
                <li>Integrated camera-based barcode scanning functionality for quick and accurate data capture.</li>
            </ul>
        </li>
        <li>
            <strong>API Integration:</strong>
            <ul>
                <li>Integrated REST APIs to fetch and display dynamic data seamlessly within the app.</li>
            </ul>
        </li>
        <li>
            <strong>Team Collaboration and Mentoring:</strong>
            <ul>
                <li>Provided technical mentoring to guide and train new and existing staff members.</li>
                <li>Conducted code reviews to maintain code quality and best practices.</li>
                <li>Collaborated with the team to ensure project success and timely delivery.</li>
            </ul>
        </li>
        <li>
            <strong>Release Management:</strong>
            <ul>
                <li>Prepared release plans and submitted the necessary requests for app deployment.</li>
            </ul>
        </li>
        <li>
            <strong>Team Leadership:</strong>
            <ul>
                <li>Managed a team of developers, ensuring smooth communication and task delegation.</li>
            </ul>
        </li>
        <li>
            <strong>App Deployment:</strong>
            <ul>
                <li>Published the iOS app successfully on the Apple App Store.</li>
            </ul>
        </li>
    </ul>

    <h5>Achievements:</h5>
    <ul>
        <li>Delivered a feature-rich iOS application with robust barcode scanning capabilities.</li>
        <li>Implemented a secure authentication system for user data protection.</li>
        <li>Enhanced team efficiency through effective mentoring and code reviews.</li>
        <li>Ensured seamless integration of REST APIs for dynamic data management.</li>
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