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
                  <img src="/assets/portfolio/mestate/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/14.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/15.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/16.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/17.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/18.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/19.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/20.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/21.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/22.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/23.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/24.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/25.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/26.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/27.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/mestate/28.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Mestate Property Buy Rent Sell Management System</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2024-25</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://mestate.equation.wmd-hosting.com/">https://mestate.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Wordpress (Backend), Houzez Theme, jQuery, MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

    <h5>Overview:</h5>
    <p>
        The <strong>"Mestate Property Buy Rent Sell Management System"</strong> is a WordPress-based real estate management platform built using the Houzez theme.
        It allows users to list properties for sale or rent, manage listings, and connect with potential buyers and sellers. The system provides an intuitive 
        user experience for real estate agents, property owners, and prospective buyers/renters.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>Property Listing Management:</strong>
            <ul>
                <li>Users can add, edit, and manage property listings with detailed descriptions, images, pricing, and location.</li>
                <li>Support for residential, commercial, and rental properties.</li>
            </ul>
        </li>
        <li>
            <strong>Advanced Search & Filters:</strong>
            <ul>
                <li>Powerful search functionality with filters for location, price range, property type, amenities, and more.</li>
                <li>Google Maps integration for location-based searches.</li>
            </ul>
        </li>
        <li>
            <strong>User Roles & Management:</strong>
            <ul>
                <li>Separate roles for Admin, Property Owners, Buyers, and Agents.</li>
                <li>Users can register, create profiles, and manage their own listings.</li>
            </ul>
        </li>
        <li>
            <strong>Property Submission & Approval System:</strong>
            <ul>
                <li>Property owners and real estate agents can submit property listings for review.</li>
                <li>Admin approval is required before listings go live on the website.</li>
            </ul>
        </li>
        <li>
            <strong>Integrated Contact & Inquiry System:</strong>
            <ul>
                <li>Interested buyers and renters can contact property owners directly.</li>
                <li>Integration with Contact Form 7 for inquiries.</li>
            </ul>
        </li>
        <li>
            <strong>Monetization & Membership Plans:</strong>
            <ul>
                <li>Option to charge property owners for featured listings.</li>
                <li>Subscription plans for real estate agents to manage multiple listings.</li>
            </ul>
        </li>
        <li>
            <strong>Service Provider Directory:</strong>
            <ul>
                <li>Implemented a 'Service Provider' role using WP Geodirectory & WP User Frontend.</li>
                <li>Each Service Provider has an individual profile they can manage.</li>
            </ul>
        </li>
        <li>
            <strong>Blog & SEO Optimization:</strong>
            <ul>
                <li>Built-in blog for sharing real estate news, tips, and market trends.</li>
                <li>SEO-friendly structure with schema markup, optimized meta tags, and sitemaps.</li>
            </ul>
        </li>
        <li>
            <strong>Mobile Responsive & Fast Loading:</strong>
            <ul>
                <li>Fully responsive and optimized for mobile devices.</li>
                <li>Performance-enhanced with caching and image optimization.</li>
            </ul>
        </li>
    </ul>

    <h5>Admin Features:</h5>
    <ul>
        <li>Dashboard to monitor all property listings, users, and transactions.</li>
        <li>Ability to approve, reject, or modify listings.</li>
        <li>Manage user roles and permissions.</li>
        <li>Track property inquiries and lead generation.</li>
    </ul>

    <h5>Integrations:</h5>
    <ul>
        <li>Google Maps for property locations.</li>
        <li>WPML for multilingual support.</li>
        <li>Mailchimp for email marketing campaigns.</li>
        <li>Social media sharing and login integrations.</li>
    </ul>

    <h5>Deployment & Maintenance:</h5>
    <ul>
        <li>Configured and deployed the website on a secure hosting environment.</li>
        <li>Regular updates and security patches applied.</li>
        <li>Performance optimization using caching plugins and CDN integration.</li>
    </ul>

    <h5>Achievements:</h5>
    <ul>
        <li>Successfully developed and deployed a full-featured real estate management system.</li>
        <li>Enhanced property visibility with SEO optimization and social media integrations.</li>
        <li>Implemented a seamless user experience for property buyers, sellers, and agents.</li>
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