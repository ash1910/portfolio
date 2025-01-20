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
                  <img src="/assets/portfolio/eLinus/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLinus/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLinus/3.png" alt="">
                </div>
               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: eLinus IOS Mobile Application</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2018-19</li>
                <li><strong>IOS App URL</strong>: <a target="_blank" href="https://apps.apple.com/us/app/elinus/id1586338098">https://apps.apple.com/us/app/elinus/id1586338098</a></li>
                <li><strong>Tech Stack</strong>: Swift, Laravel Rest API</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
            <h5>Overview:</h5>
    <p>
        The "eLinus Mobile Application" is an iOS-based app designed to provide users with instant access to a vast library of academic materials on their smartphones or tablets. 
        The app offers seamless synchronization across multiple platforms, ensuring users can resume their reading anytime, anywhere. It also includes extensive customization options for a personalized reading experience.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>User Interface Development:</strong>
            <ul>
                <li>Designed and developed an intuitive and user-friendly interface using Swift.</li>
            </ul>
        </li>
        <li>
            <strong>Authentication System:</strong>
            <ul>
                <li>Implemented secure user registration and login functionality.</li>
                <li>Developed a robust authentication mechanism to protect user data.</li>
            </ul>
        </li>
        <li>
            <strong>eLinus Features:</strong>
            <ul>
                <li>Instant access to a vast library of academic materials.</li>
                <li>Seamless synchronization across multiple platforms for continuity.</li>
                <li>Customizable font, size, and reading mode to enhance the reading experience.</li>
                <li>Visit <a href="https://linusebooks.com" target="_blank">linusebooks.com</a> for more details and additional functionality.</li>
            </ul>
        </li>
        <li>
            <strong>API Integration:</strong>
            <ul>
                <li>Integrated REST APIs to provide dynamic content and real-time updates.</li>
            </ul>
        </li>
        <li>
            <strong>Team Collaboration and Mentoring:</strong>
            <ul>
                <li>Provided technical mentoring to guide and train new and existing team members.</li>
                <li>Performed code reviews to ensure adherence to best practices.</li>
                <li>Collaborated effectively with team members to achieve project goals.</li>
            </ul>
        </li>
        <li>
            <strong>Release Management:</strong>
            <ul>
                <li>Prepared detailed release plans and submitted necessary requests for deployment.</li>
            </ul>
        </li>
        <li>
            <strong>Team Leadership:</strong>
            <ul>
                <li>Managed a team of developers to ensure timely and quality delivery of the project.</li>
            </ul>
        </li>
        <li>
            <strong>App Deployment:</strong>
            <ul>
                <li>Successfully published the app on the Apple App Store.</li>
            </ul>
        </li>
    </ul>

    <h5>Achievements:</h5>
    <ul>
        <li>Delivered a feature-rich academic reading application with user-friendly customization options.</li>
        <li>Implemented a seamless synchronization feature for multi-platform access.</li>
        <li>Enhanced team capabilities through effective mentoring and collaboration.</li>
        <li>Ensured smooth API integration for dynamic content delivery.</li>
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