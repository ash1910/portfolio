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
                  <img src="/assets/portfolio/POS/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/POS/14.png" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Business Management Software (POS)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2020-21</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://pos.equation.wmd-hosting.com/">https://pos.equation.wmd-hosting.com/</a> User: demo , Password: 1234</li>
                <li><strong>Tech Stack</strong>: Laravel(Backend), Vue.js(Frontend), Tailwind CSS</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
<h5>Overview:</h5>
<p>The POS system is a robust web application designed to streamline retail operations. It provides seamless management of sales, inventory, and customer transactions, offering businesses an efficient way to track and optimize their day-to-day operations.</p>

<h5>Key Features:</h5>
<ul>
<li><strong>Sales Management</strong>: A comprehensive interface for processing sales, including product selection, discounts, and payment methods.</li>
<li><strong>Inventory Tracking</strong>: Real-time updates to inventory levels as sales are processed, with low-stock alerts.</li>
<li><strong>Customer Management</strong>: Maintain customer profiles with purchase history to enable targeted promotions and loyalty programs.</li>
<li><strong>Reporting and Analytics</strong>: Detailed sales reports and insights to aid decision-making.</li>
<li><strong>User Roles and Permissions</strong>: Secure multi-user access with customizable permissions for administrators, cashiers, and managers.</li>
</ul>
<h5>Challenges Addressed:</h5>
<ul>
<li>Implemented real-time data synchronization between backend and frontend for a smoother user experience.</li>
<li>Optimized database queries to ensure high performance under heavy load.</li>
<li>Ensured scalability to handle the needs of businesses of various sizes.</li>
</ul>
<h5>Achievements:</h5>
<ul>
<li>Reduced transaction processing time by 30%, improving checkout efficiency.</li>
<li>Successfully deployed the application in multiple retail stores, handling over 10,000 transactions daily.</li>
<li>Received positive client feedback for its user-friendly interface and reliability.</li>
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