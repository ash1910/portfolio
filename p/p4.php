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
                  <img src="/assets/portfolio/eLibrary/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eLibrary/11.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: e-Library Management System</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2021-22</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://elibrary.equation.wmd-hosting.com/sign-in/Admin">https://elibrary.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

            <h5>Overview:</h5>
<p>The e-Library Management System is a platform designed to manage various digital resources like books, law documents, rules, policies, and notifications. It enables seamless access and interaction for users in different roles, such as readers, members, admins, and patrons. The system allows users to log in and access specific resources based on their role, making it a versatile and efficient tool for managing and distributing library content.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Login:</strong>
    <ul>
      <li><strong>As a Reader:</strong> Browse and view available resources like books, law documents, and policies.</li>
      <li><strong>As a Member:</strong> Access additional resources and functionalities, such as borrowing or reserving books.</li>
      <li><strong>As an Admin:</strong> Manage users, content, and system settings.</li>
      <li><strong>As a Patron:</strong> Contribute to the library’s catalog by adding resources or offering feedback.</li>
    </ul>
  </li>
  <li><strong>Catalogues & Collections:</strong>
    <ul>
      <li><strong>All:</strong> View the entire collection of resources in the library.</li>
      <li><strong>Books:</strong> Access a wide range of digital books across different genres and subjects.</li>
      <li><strong>Law:</strong> Access legal documents and law-related resources.</li>
      <li><strong>Rules:</strong> Browse the set of rules governing the library usage.</li>
      <li><strong>Policies:</strong> Review various library policies such as borrowing policies, usage terms, etc.</li>
      <li><strong>Circular:</strong> Read official circulars and notices issued by the library.</li>
      <li><strong>Notifications:</strong> Stay updated with the latest library announcements and system alerts.</li>
    </ul>
  </li>
  <li><strong>About Us:</strong> Learn about the library’s mission, vision, and services offered to users.</li>
  <li><strong>How to Use:</strong> Clear instructions on how to navigate the platform, borrow resources, and make the most of the library’s features.</li>
  <li><strong>Contact:</strong> Get in touch with the library’s support team for assistance, queries, or feedback.</li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Simplified resource access for users of different roles through a streamlined login system.</li>
  <li>Managed a large variety of content types (books, law, policies) in one centralized platform.</li>
  <li>Developed a user-friendly interface for both library administrators and users.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Increased user engagement with easy access to cataloged content.</li>
  <li>Automated management of library resources, improving workflow efficiency for admins.</li>
  <li>Provided a scalable platform for future content expansion and user base growth.</li>
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