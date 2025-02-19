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
                  <img src="/assets/portfolio/AmarhaorApp/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/AmarhaorApp/8.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Amarhaor Android Mobile Application</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2022-23</li>
                <li><strong>Android App URL</strong>: <a target="_blank" href="https://play.google.com/store/apps/details?id=com.amarhaor.app">https://play.google.com/store/apps/details?id=com.amarhaor.app</a></li>
                <li><strong>Tech Stack</strong>: Reat Native, Laravel Rest API</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
    <h5>Overview:</h5>
    <p>
        <strong>"Amarhaor App"</strong> is the mobile version of the Amarhaor Website, designed to bring the beauty of the wetlands of Bangladesh  
        directly to Android users. The app provides an interactive and immersive experience, showcasing Haor's stunning landscapes, wildlife,  
        and cultural significance while enabling users to explore locations, plan trips, and engage with the community.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>Stunning Visual Gallery:</strong>
            <ul>
                <li>High-resolution images and videos of the Haor wetlands.</li>
                <li>Photo categorization based on seasons, wildlife, and landscapes.</li>
                <li>Fast-loading images with caching for offline access.</li>
            </ul>
        </li>
        <li>
            <strong>Interactive Map & Location Guide:</strong>
            <ul>
                <li>Google Maps integration to explore major Haor locations.</li>
                <li>GPS-based navigation to nearby tourist spots.</li>
                <li>Offline map functionality for remote areas.</li>
            </ul>
        </li>
        <li>
            <strong>Tourism & Travel Guide:</strong>
            <ul>
                <li>Details on best times to visit, travel options, and accommodation.</li>
                <li>Recommended activities and eco-tourism opportunities.</li>
            </ul>
        </li>
        <li>
            <strong>Biodiversity & Wildlife Information:</strong>
            <ul>
                <li>Profiles of migratory birds, fish species, and rare plants.</li>
                <li>Seasonal migration patterns and ecological importance.</li>
            </ul>
        </li>
        <li>
            <strong>Live Weather Updates:</strong>
            <ul>
                <li>Integrated Weather API for real-time weather conditions.</li>
                <li>Forecasts for different Haor regions.</li>
            </ul>
        </li>
        <li>
            <strong>Articles & Blogs:</strong>
            <ul>
                <li>Latest updates on conservation efforts and tourism news.</li>
                <li>SEO-friendly content with push notifications.</li>
            </ul>
        </li>
        <li>
            <strong>Community & User Engagement:</strong>
            <ul>
                <li>Users can submit travel stories, photos, and experiences.</li>
                <li>Social media integration for easy sharing.</li>
            </ul>
        </li>
        <li>
            <strong>Offline Mode:</strong>
            <ul>
                <li>Cached articles, images, and maps for offline access.</li>
                <li>Lightweight and optimized for low-bandwidth areas.</li>
            </ul>
        </li>
    </ul>

    <h5>Admin Features:</h5>
    <ul>
        <li>Admin panel for content management and user moderation.</li>
        <li>Push notification system for news and alerts.</li>
        <li>Analytics and performance tracking.</li>
    </ul>

    <h5>Integrations:</h5>
    <ul>
        <li>Google Maps API for location-based exploration.</li>
        <li>Weather API for live updates.</li>
        <li>Firebase for authentication and push notifications.</li>
        <li>Social Media API for sharing and engagement.</li>
    </ul>

    <h5>Deployment & Maintenance:</h5>
    <ul>
        <li>Optimized for performance and battery efficiency.</li>
        <li>Regular updates for bug fixes and feature enhancements.</li>
        <li>Published on Google Play Store.</li>
    </ul>

    <h5>Achievements:</h5>
    <ul>
        <li>Successfully launched an engaging and user-friendly mobile experience.</li>
        <li>Encouraged eco-tourism and conservation awareness.</li>
        <li>Increased accessibility to Haor-related information for a wider audience.</li>
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