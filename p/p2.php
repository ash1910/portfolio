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
                  <img src="/assets/portfolio/WMS/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/14.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/15.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/16.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/17.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/18.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/19.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/20.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/21.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/22.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/23.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/WMS/24.png" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Workshop Management Software (ERP)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2020-21</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://wms.equation.wmd-hosting.com/">https://wms.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
<h5>Overview:</h5>
<p>
  The Workshop Management System(WMS) is a comprehensive web application designed to streamline the operations of workshops, garages, and service centers. It simplifies job tracking, customer communication, and resource management, enabling workshops to improve efficiency and customer satisfaction.
</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Job Management:</strong> Track the progress of repair jobs from start to completion, with real-time status updates.</li>
  <li><strong>Customer Management:</strong> Maintain detailed customer profiles, including service history and contact details.</li>
  <li><strong>Scheduling and Appointments:</strong> Allow customers to book appointments online and view their service schedule.</li>
  <li><strong>Inventory Management:</strong> Track parts and tools inventory, ensuring availability for upcoming jobs.</li>
  <li><strong>Billing and Invoicing:</strong> Generate detailed invoices with a breakdown of labor, parts, and taxes.</li>
  <li><strong>Reports and Analytics:</strong> Provide insights into workshop performance, including revenue, job types, and efficiency metrics.</li>
</ul>
<h5>Challenges Addressed:</h5>
<ul>
  <li><strong>Integrated scheduling and job management:</strong> Reduced appointment overlaps and delays through advanced scheduling features.</li>
  <li><strong>Optimized database architecture:</strong> Ensured seamless handling of large-scale data, such as customer histories and inventory details.</li>
  <li><strong>Enhanced security:</strong> Developed robust authentication and role-based access control for secure multi-user access.</li>
</ul>
<h5>Achievements:</h5>
<ul>
  <li><strong>Improved job processing time:</strong> Reduced processing time by 20% through efficient tracking and resource allocation.</li>
  <li><strong>Enhanced customer retention:</strong> Automated service reminders and detailed service histories led to increased customer satisfaction.</li>
  <li><strong>Successful implementation:</strong> Deployed the system in multiple workshops, improving workflow and increasing revenue.</li>
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