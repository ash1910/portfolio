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
                  <img src="/assets/portfolio/PiqDropAdmin/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/PiqDropAdmin/13.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Admin Management Software</li>
                <li><strong>Project date</strong>: 2024-2025</li>
                <li><strong>Tech Stack</strong>: Laravel, React, MySQL, REST API, Stripe Payment Gateway</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
    <h5>Overview:</h5>
    <p>
        PiqDrop Admin Panel is a comprehensive web-based management system designed to oversee and control all operations of the PiqDrop delivery platform. 
        This powerful admin interface provides complete visibility and control over users, riders, orders, payments, and system configurations. 
        Built with Laravel for robust backend functionality and React for a modern, responsive frontend, the admin panel ensures efficient platform management and business operations.
    </p>

    <h5>Key Features:</h5>
    <ul>
        <li>
            <strong>Dashboard & Analytics:</strong>
            <ul>
                <li>Comprehensive dashboard with real-time statistics and KPIs.</li>
                <li>Revenue tracking and financial analytics.</li>
                <li>Order volume and completion rate metrics.</li>
                <li>User and rider growth analytics with charts and graphs.</li>
                <li>Geographic heat maps for delivery coverage areas.</li>
            </ul>
        </li>
        <li>
            <strong>User Management:</strong>
            <ul>
                <li>Complete user directory with search and filtering capabilities.</li>
                <li>User profile management and verification.</li>
                <li>Account status control (active, suspended, banned).</li>
                <li>Order history and transaction logs per user.</li>
                <li>Customer support ticket management.</li>
            </ul>
        </li>
        <li>
            <strong>Rider Management:</strong>
            <ul>
                <li>Rider registration approval and verification system.</li>
                <li>Document verification and background check tracking.</li>
                <li>Real-time rider location tracking on map.</li>
                <li>Performance monitoring and rating management.</li>
                <li>Earnings and payout management.</li>
                <li>Rider availability and shift scheduling.</li>
            </ul>
        </li>
        <li>
            <strong>Order Management:</strong>
            <ul>
                <li>Real-time order monitoring and status tracking.</li>
                <li>Order assignment and reassignment to riders.</li>
                <li>Detailed order information and tracking history.</li>
                <li>Dispute resolution and refund processing.</li>
                <li>Order cancellation and modification handling.</li>
                <li>Bulk order operations and exports.</li>
            </ul>
        </li>
        <li>
            <strong>Financial Management:</strong>
            <ul>
                <li>Comprehensive payment transaction records.</li>
                <li>Stripe payment gateway integration and management.</li>
                <li>Automated commission calculation and distribution.</li>
                <li>Rider payout processing and approval.</li>
                <li>Revenue reports and financial statements.</li>
                <li>Refund and dispute management.</li>
            </ul>
        </li>
        <li>
            <strong>System Configuration:</strong>
            <ul>
                <li>Dynamic pricing configuration and zone management.</li>
                <li>Delivery fee calculation rules and settings.</li>
                <li>Service area and coverage zone management.</li>
                <li>Commission rate and payout settings.</li>
                <li>Email and notification template management.</li>
                <li>System-wide settings and parameters.</li>
            </ul>
        </li>
        <li>
            <strong>Content Management:</strong>
            <ul>
                <li>FAQ and help content management.</li>
                <li>Terms & conditions and privacy policy editor.</li>
                <li>Push notification broadcasting system.</li>
                <li>Promotional banner and announcement management.</li>
            </ul>
        </li>
        <li>
            <strong>Reports & Export:</strong>
            <ul>
                <li>Comprehensive reporting system with customizable date ranges.</li>
                <li>Financial reports (daily, weekly, monthly, yearly).</li>
                <li>Rider performance reports and leaderboards.</li>
                <li>Order analytics and trend reports.</li>
                <li>Export functionality to CSV and PDF formats.</li>
            </ul>
        </li>
        <li>
            <strong>Security & Access Control:</strong>
            <ul>
                <li>Role-based access control (RBAC) system.</li>
                <li>Multiple admin user management with different permission levels.</li>
                <li>Activity logs and audit trails.</li>
                <li>Two-factor authentication (2FA) for admin accounts.</li>
                <li>Session management and security monitoring.</li>
            </ul>
        </li>
    </ul>

    <h5>Technical Achievements:</h5>
    <ul>
        <li>Developed a full-featured admin panel with RESTful API architecture using Laravel.</li>
        <li>Created an intuitive and responsive user interface using React with modern design principles.</li>
        <li>Implemented real-time data updates using WebSockets for live order tracking.</li>
        <li>Built comprehensive role-based access control system for secure multi-admin management.</li>
        <li>Integrated advanced analytics and reporting with interactive charts using Chart.js.</li>
        <li>Developed automated email notification system for various platform events.</li>
        <li>Implemented efficient database queries and indexing for handling large datasets.</li>
        <li>Created a scalable architecture capable of managing thousands of concurrent orders.</li>
        <li>Integrated Google Maps API for location-based features and rider tracking.</li>
        <li>Developed automated backup and data recovery mechanisms.</li>
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
