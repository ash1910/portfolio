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
                  <img src="/assets/portfolio/BL/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BL/8.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Bill of Lading (BL)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2023-24</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://bl.equation.wmd-hosting.com/">https://bl.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

<h5>Overview:</h5>
<p>The "Bill of Lading" project is a web application designed to streamline the management of sea and air bill of lading (BL) documents. It provides robust features for creating, managing, and handling BL records with user-friendly options for editing, cloning, and printing.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> A centralized interface to monitor and manage all BL activities.</li>
  <li><strong>Sea BL Management:</strong>
    <ul>
      <li><strong>Sea BL List:</strong> View all sea BL records with options to:
        <ul>
          <li>Edit</li>
          <li>Delete</li>
          <li>Clone</li>
          <li>Print</li>
          <li>Show</li>
        </ul>
      </li>
      <li><strong>New Sea BL:</strong> Create new sea BL records efficiently.</li>
    </ul>
  </li>
  <li><strong>Air BL Management:</strong>
    <ul>
      <li><strong>Air BL List:</strong> Access and manage all air BL records with options to:
        <ul>
          <li>Edit</li>
          <li>Delete</li>
          <li>Clone</li>
          <li>Print</li>
          <li>Show</li>
        </ul>
      </li>
      <li><strong>New Air BL:</strong> Create new air BL records seamlessly.</li>
    </ul>
  </li>
  <li><strong>User Management:</strong>
    <ul>
      <li><strong>Users:</strong> Manage user accounts with ease.</li>
      <li><strong>New User:</strong> Add new users to the system for enhanced collaboration.</li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Streamlining the process of managing sea and air BL documents.</li>
  <li>Providing quick and reliable options to clone, edit, or print BL records.</li>
  <li>Enhancing data accessibility and organization.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Improved efficiency in managing BL records.</li>
  <li>Reduced paperwork and manual errors with streamlined digital operations.</li>
  <li>Enhanced user experience with intuitive features for document handling.</li>
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