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
                  <img src="/assets/portfolio/HMS/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/14.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/HMS/15.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Hospital Management System (HMS)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2022-23</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://hms.equation.wmd-hosting.com/">https://hms.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

<h5>Overview:</h5>
<p>The Hospital Management System is an advanced web-based solution designed to streamline the management of hospital operations, ensuring efficient patient care and administrative workflows. It offers a comprehensive set of features for patient management, stock control, financial tracking, and report generation, empowering hospitals to deliver quality healthcare services.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> A centralized interface for quick access to patient, stock, and financial data.</li>
  <li><strong>Patient Management:</strong>
    <ul>
      <li><strong>Add New Patient:</strong> Register new patients into the system.</li>
      <li><strong>Admitted Patient:</strong> Track and manage admitted patients.</li>
      <li><strong>All Patient:</strong> View a complete list of patients.</li>
      <li><strong>Patient's Ledger:</strong> Maintain detailed financial records for individual patients.</li>
      <li><strong>Patient's All Ledger:</strong> Access a comprehensive view of all patient ledgers.</li>
    </ul>
  </li>
  <li><strong>Voucher and Report Management:</strong>
    <ul>
      <li><strong>Voucher Search & Edit:</strong> Locate and modify vouchers as required.</li>
      <li><strong>Sales Vouchers:</strong> Manage sales vouchers for various transactions.</li>
      <li><strong>Patient Due Report:</strong> Generate reports on outstanding payments from patients.</li>
      <li><strong>Advance Report:</strong> Track advance payments received.</li>
      <li><strong>Category Wise Item Report:</strong> Generate reports on inventory by category.</li>
    </ul>
  </li>
  <li><strong>Inventory Management:</strong>
    <ul>
      <li><strong>Item Management:</strong> Add and manage item details.</li>
      <li><strong>Stock Receive & Stock Out:</strong> Record stock inflow and outflow transactions.</li>
      <li><strong>Stock Report:</strong> View and generate reports on stock levels.</li>
    </ul>
  </li>
  <li><strong>Pathology & Doctor Management:</strong>
    <ul>
      <li><strong>Pathology Specialist Doctor:</strong> Manage pathology specialists.</li>
      <li><strong>Test Sample & Device:</strong> Handle test samples and devices.</li>
      <li><strong>Report Generate & Pathology Report:</strong> Generate pathology reports.</li>
      <li><strong>Doctors Management:</strong>
        <ul>
          <li><strong>Active Doctors:</strong> Manage active doctors.</li>
          <li><strong>Inactive Doctors:</strong> Manage inactive doctor profiles.</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><strong>Financial Tracking:</strong>
    <ul>
      <li><strong>Sales Summary Report:</strong> Review and summarize sales data.</li>
      <li><strong>Cash Receive Summary:</strong> Monitor advance payments and due collections.</li>
      <li><strong>Surgeon Payment Report:</strong> Track payments made to surgeons.</li>
      <li><strong>Supervisor Sales Report:</strong> Monitor sal


            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php include_once "../footer.php"; ?>

</body>

</html>