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
                  <img src="/assets/portfolio/FMS/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/FMS/9.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: File Movement System (eFMS)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2022-23</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://fms.equation.wmd-hosting.com/">https://fms.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

<h5>Overview:</h5>
<p>The File Movement System is a comprehensive web application designed to streamline the management and tracking of files within an organization. It provides an efficient mechanism for creating, managing, and reporting on cases and file movements across various departments, ensuring transparency and accountability.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Home:</strong> A dashboard providing a quick overview of file movements and cases.</li>
  <li><strong>Case Management:</strong>
    <ul>
      <li><strong>Case List:</strong> View and manage all cases.</li>
      <li><strong>Case List (Approved):</strong> Access a list of approved cases.</li>
      <li><strong>Case Create:</strong> Create new cases with associated details.</li>
      <li><strong>Total Case File:</strong> View a summary of all case files.</li>
      <li><strong>Non-disposed Files:</strong> Track files that are yet to be resolved.</li>
      <li><strong>Disposed Files:</strong> Manage files that have been resolved.</li>
    </ul>
  </li>
  <li><strong>Settings:</strong>
    <ul>
      <li><strong>Ministry:</strong> Manage ministry details.</li>
      <li><strong>Section:</strong> Configure sections within the organization.</li>
      <li><strong>Designation:</strong> Define employee designations.</li>
      <li><strong>Employee:</strong> Manage employee information.</li>
      <li><strong>File Type:</strong> Categorize and manage different file types.</li>
    </ul>
  </li>
  <li><strong>Reports:</strong>
    <ul>
      <li><strong>Tracking Number Wise Cases Report:</strong> Generate reports based on tracking numbers.</li>
      <li><strong>Tracking Number Wise Details Report:</strong> Get detailed tracking number-based reports.</li>
      <li><strong>Disposed Files Report:</strong> Review reports of resolved files.</li>
      <li><strong>Non-disposed Files Report:</strong> View reports of unresolved files.</li>
      <li><strong>Office Wise Non-disposed Files Report:</strong> Generate unresolved file reports for specific offices.</li>
      <li><strong>Date Wise Cases Report:</strong> Analyze case data based on dates.</li>
      <li><strong>Ministry Wise Case Report:</strong> Generate reports sorted by ministry.</li>
      <li><strong>File Type Wise Case Report:</strong> Review reports categorized by file types.</li>
    </ul>
  </li>
  <li><strong>Trash Management:</strong>
    <ul>
      <li><strong>Ministry:</strong> Manage deleted ministry data.</li>
      <li><strong>File Type:</strong> Handle deleted file types.</li>
      <li><strong>Designation:</strong> Recover or permanently delete designations.</li>
      <li><strong>Section:</strong> Manage deleted sections.</li>
      <li><strong>Case File Type:</strong> Restore or delete case file types.</li>
      <li><strong>Case File Category:</strong> Recover or delete case file categories.</li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Centralized tracking of file movements to eliminate delays and mismanagement.</li>
  <li>Enhanced reporting capabilities for better oversight of file status.</li>
  <li>Simplified case creation and categorization for better organization.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Improved accountability and transparency in file management processes.</li>
  <li>Significant reduction in time taken to locate and track case files.</li>
  <li>Enhanced data organization and reporting for informed decision-making.</li>
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