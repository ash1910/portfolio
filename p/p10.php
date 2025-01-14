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
                  <img src="/assets/portfolio/TMS/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/TMS/11.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Training Management System (TMS)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2023-24</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://tms.equation.wmd-hosting.com/">https://tms.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

<h5>Overview:</h5>
<p>The "Training Management System (TMS)" is a comprehensive platform designed to manage various training, meeting, visit, and leave activities within an organization. It provides a user-friendly interface for managing in-house, external, and foreign training programs, as well as workshops, seminars, and meetings, while also tracking employee leaves and attendance.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> A centralized interface providing an overview of all the training, meetings, visits, and leave activities.</li>
  
  <li><strong>Site Management:</strong>
    <ul>
      <li>Office</li>
      <li>Section</li>
      <li>Designation</li>
      <li>Grade</li>
      <li>Countries</li>
      <li>Trainee Type</li>
      <li>Trainer Type</li>
    </ul>
  </li>
  
  <li><strong>Employee Management:</strong> Manage employee records and track their training participation.</li>
  
  <li><strong>Training Management:</strong>
    <ul>
      <li><strong>In-House Training:</strong>
        <ul>
          <li>In-House Training Create: Create new in-house training sessions.</li>
          <li>In-House Training List: View all in-house training sessions.</li>
        </ul>
      </li>
      <li><strong>External Training:</strong>
        <ul>
          <li>External Training Create: Create new external training sessions.</li>
          <li>External Training List: View all external training sessions.</li>
        </ul>
      </li>
      <li><strong>Foreign Training:</strong>
        <ul>
          <li>Foreign Training Create: Add foreign training sessions.</li>
          <li>Foreign Training List: View foreign training sessions.</li>
        </ul>
      </li>
    </ul>
  </li>

  <li><strong>Workshop/Seminar Management:</strong>
    <ul>
      <li>Workshop/Seminar Create: Create new workshops or seminars.</li>
      <li>Workshop/Seminar List: View all workshops and seminars.</li>
    </ul>
  </li>

  <li><strong>Meeting Management:</strong>
    <ul>
      <li>Foreign Meeting Create: Create new foreign meetings.</li>
      <li>Foreign Meeting List: Manage foreign meetings.</li>
    </ul>
  </li>

  <li><strong>Visit Management:</strong>
    <ul>
      <li>Foreign Visit Create: Create new foreign visits.</li>
      <li>Foreign Visit List: View all foreign visits.</li>
    </ul>
  </li>

  <li><strong>Leave Management:</strong>
    <ul>
      <li>Ex-Bangladesh Leave Create: Create new leave requests for employees going abroad.</li>
      <li>Ex-Bangladesh Leave List: View and manage all leave records.</li>
    </ul>
  </li>

  <li><strong>Report Management:</strong>
    <ul>
      <li>In-House Training/Workshop/Seminar Reports:
        <ul>
          <li>Employee-wise</li>
          <li>Grade-wise</li>
        </ul>
      </li>
      <li>External Training Reports:
        <ul>
          <li>Employee-wise</li>
          <li>Grade-wise</li>
        </ul>
      </li>
      <li>Foreign Visit Reports:
        <ul>
          <li>Employee-wise</li>
          <li>Grade-wise</li>
        </ul>
      </li>
      <li>Ex-Bangladesh Leave Reports:
        <ul>
          <li>Employee-wise</li>
        </ul>
      </li>
    </ul>
  </li>

  <li><strong>User Management:</strong>
    <ul>
      <li>Users: Manage system users.</li>
      <li>Role: Assign roles to users.</li>
    </ul>
  </li>

  <li><strong>Deleted Items:</strong> Manage and recover deleted data.</li>
  
  <li><strong>Logout:</strong> A logout option to securely exit the system.</li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Efficient tracking of multiple types of training and leave activities.</li>
  <li>Simplifying the creation and management of workshops, seminars, and visits.</li>
  <li>Providing a comprehensive reporting system for employee activities related to training and leave.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Streamlined employee training and leave management, reducing administrative overhead.</li>
  <li>Improved data accessibility and reporting for training sessions, meetings, and visits.</li>
  <li>Enhanced overall efficiency with centralized management of training programs and events.</li>
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