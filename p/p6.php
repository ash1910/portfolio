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
                  <img src="/assets/portfolio/helpdesk/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/helpdesk/14.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Help Desk Ticketing System</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2022-23</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://helpdesk.equation.wmd-hosting.com/">https://helpdesk.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

            <h5>Overview:</h5>
<p>The Help Desk Ticketing System is a robust platform designed to streamline customer support and ticket management. It provides an efficient way to handle client issues, assign tasks, and track resolution progress. The system supports multi-role functionality with a secure dashboard for administrators, managers, and support teams.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> A centralized interface providing an overview of active tickets, team performance, and system analytics.</li>
  <li><strong>Users & Security:</strong>
    <ul>
      <li><strong>Users:</strong> Manage user accounts and profiles.</li>
      <li><strong>Roles:</strong> Assign and control user permissions with role-based access.</li>
    </ul>
  </li>
  <li><strong>Settings:</strong>
    <ul>
      <li><strong>Team Type:</strong> Define team types for effective task allocation.</li>
      <li><strong>Team Info:</strong> Manage details about support teams.</li>
      <li><strong>Project Type:</strong> Define various project categories.</li>
      <li><strong>Emoji List:</strong> Customize emojis for better user interaction.</li>
      <li><strong>Department:</strong> Manage support departments for task assignments.</li>
    </ul>
  </li>
  <li><strong>Profiles:</strong>
    <ul>
      <li><strong>Manager Profile:</strong> Overview and management of manager-level activities and responsibilities.</li>
      <li><strong>Member Profile:</strong> Track and manage individual team member contributions.</li>
    </ul>
  </li>
  <li><strong>Task Management:</strong>
    <ul>
      <li><strong>Task Assign:</strong> Assign tasks efficiently to team members with clear instructions.</li>
    </ul>
  </li>
  <li><strong>Client Management:</strong>
    <ul>
      <li><strong>Clients:</strong> Manage client accounts and information.</li>
      <li><strong>Clients Info:</strong> Access detailed client profiles for better service delivery.</li>
    </ul>
  </li>
  <li><strong>Project Management:</strong> Manage projects, track progress, and assign tickets to relevant teams.</li>
  <li><strong>Ticket Management:</strong>
    <ul>
      <li><strong>Ticket Info:</strong> Record and manage detailed ticket information for resolution.</li>
    </ul>
  </li>
  <li><strong>Reports:</strong>
    <ul>
      <li><strong>Support Status Report:</strong> Generate comprehensive reports on ticket status, team performance, and client satisfaction.</li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Improved ticket resolution time through streamlined task assignment and tracking.</li>
  <li>Enhanced collaboration among team members with organized profiles and task lists.</li>
  <li>Provided actionable insights with detailed reporting for managers and stakeholders.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Delivered a scalable and efficient ticketing system, improving customer satisfaction.</li>
  <li>Enabled seamless team coordination and task management across departments.</li>
  <li>Enhanced security and user management with role-based access controls.</li>
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