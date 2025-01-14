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
                  <img src="/assets/portfolio/eStore/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/14.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/15.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/16.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/eStore/17.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: STORE MANAGEMENT SYSTEM (ESTORE)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2021-22</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://estore.equation.wmd-hosting.com/">https://estore.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
  
<h5>Overview:</h5>
<p>The Store Management System (eStore) is a web-based solution designed to manage store operations efficiently, including inventory, requisitions, stock management, and reporting. It provides an intuitive dashboard for administrators, storekeepers, and employees to handle day-to-day tasks and streamline store operations seamlessly.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> Centralized interface for quick access to critical information and system statistics.</li>
  <li><strong>User Management:</strong> Manage users, roles, and permissions with role-based access control.
    <ul>
      <li><strong>Users:</strong> Create, edit, and manage user accounts.</li>
      <li><strong>Roles:</strong> Define and assign roles for system users.</li>
    </ul>
  </li>
  <li><strong>Configuration:</strong> Configure organizational details and operational settings.
    <ul>
      <li>Office</li>
      <li>Section</li>
      <li>Employee Grades</li>
      <li>Designations</li>
      <li>Employee Types</li>
      <li>Employee Classes</li>
      <li>Units</li>
    </ul>
  </li>
  <li><strong>Product Management:</strong>
    <ul>
      <li><strong>Product Categories:</strong> Organize products by categories for easy management.</li>
      <li><strong>Products:</strong> Manage product details, availability, and stock.</li>
    </ul>
  </li>
  <li><strong>Vehicle and Driver Management:</strong> Manage driver and vehicle details for requisition and delivery.</li>
  <li><strong>Requisition Management:</strong>
    <ul>
      <li><strong>Limits:</strong> Set and manage product requisition limits for sections, designations, and common usage.</li>
      <li><strong>Auto Populate:</strong> Automatically populate requisition limits based on configuration.</li>
      <li><strong>Store Keeper Requisition:</strong> Handle store requisitions efficiently.</li>
      <li><strong>Requisition Lists:</strong>
        <ul>
          <li>My Requisitions</li>
          <li>All Requisitions</li>
          <li>New Requisitions</li>
          <li>Vehicle Requisitions: New, All, and My Requisitions</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><strong>Stock Management:</strong>
    <ul>
      <li><strong>Store Receive:</strong> Record and manage stock entries.</li>
      <li><strong>Stock Out:</strong> Manage product stock outflow, including detailed tracking of stock transactions.</li>
    </ul>
  </li>
  <li><strong>Supplier Management:</strong> Maintain supplier details for streamlined procurement.</li>
  <li><strong>Employee Management:</strong> Manage employee information, including inactive employees and officer details.</li>
  <li><strong>Reports:</strong> Generate detailed reports for inventory, requisitions, and employee data.
    <ul>
      <li>Officer Reports</li>
      <li>Product Reports</li>
      <li>Store Goods Details</li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Centralized management of store operations, ensuring efficient stock handling and requisition tracking.</li>
  <li>Streamlined workflows for requisition limits, approvals, and stock transactions.</li>
  <li>Enhanced reporting and analytics for improved decision-making and operational transparency.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Improved operational efficiency with an intuitive and user-friendly interface for managing store processes.</li>
  <li>Automated requisition and stock management workflows, reducing manual intervention.</li>
  <li>Enhanced visibility of store inventory and requisition statuses through detailed reporting.</li>
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