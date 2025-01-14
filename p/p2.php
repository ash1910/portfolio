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
                <li><strong>Category</strong>: Workshop Management Software (WMS)</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2020-21</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://wms.equation.wmd-hosting.com/">https://wms.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
    
<h5>Overview:</h5>
<p>The "Workshop Management Software (WMS)" is designed to help businesses streamline and manage workshop operations. It integrates billing, inventory management, receivables, accounts, and customer relationship management, providing a comprehensive solution for workshop management and financial tracking.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong>
    <ul>
      <li>Number of Jobs: View the total number of jobs currently being processed.</li>
      <li>Billing Status: Track the status of ongoing billing tasks.</li>
      <li>Inventory Status: Monitor the status of inventory items.</li>
      <li>Stock Status: View the current stock levels in the workshop.</li>
    </ul>
  </li>

  <li><strong>Settings:</strong>
    <ul>
      <li>User: Manage user roles and access permissions.</li>
      <li>Bill of Materials (BOM) Parts: Maintain a list of parts used in various services.</li>
      <li>Parts: Manage parts inventory.</li>
      <li>Service: Define and manage the services offered by the workshop.</li>
      <li>Supplier: Manage supplier details and contacts.</li>
    </ul>
  </li>

  <li><strong>Inventory Management:</strong>
    <ul>
      <li>Inventory: Manage and track inventory items in the workshop.</li>
      <li>Purchase: Record and manage purchases of inventory items.</li>
      <li>Purchase Return: Handle returns of purchased items.</li>
      <li>Issue: Track issued items for jobs and services.</li>
      <li>Issue Return: Manage returns of issued items.</li>
      <li>WIP Stock: Manage stock that is in the process of being used in jobs (Work In Progress).</li>
    </ul>
  </li>

  <li><strong>Receivable:</strong>
    <ul>
      <li>Cash Out: Track all cash payments made.</li>
      <li>All Due Report: View a report of all due payments and amounts.</li>
      <li>Accounts: Manage accounts for the workshop.</li>
      <li>Decline Bank (POS): Track declined payments made through the point-of-sale system.</li>
      <li>Transactions: Manage and track financial transactions.</li>
    </ul>
  </li>

  <li><strong>Account Management:</strong>
    <ul>
      <li>Accounts Group: Define and manage groups of accounts.</li>
      <li>Accounts Head: Define the head categories for accounts.</li>
      <li>Opening Balance: Set the opening balance for accounts.</li>
      <li>Voucher Entry: Record voucher entries for financial transactions.</li>
      <li>Auto Journal: Automatically create journal entries for transactions.</li>
      <li>Accounts Report: Generate reports on the accounts of the workshop.</li>
    </ul>
  </li>

  <li><strong>Billing Management:</strong>
    <ul>
      <li>Create Billing: Generate new billing entries for services and parts.</li>
      <li>Search Client: Search for clients by name or registration number.</li>
      <li>Search by Registration No.: Search clients by their vehicle registration number.</li>
      <li>Search by Chassis No.: Search clients by vehicle chassis number.</li>
      <li>Add Parts: Add parts to the bill.</li>
      <li>Add Service: Add services to the bill.</li>
      <li>Make Payment by Card, Cheque, Online: Provide multiple payment options for clients.</li>
    </ul>
  </li>

  <li><strong>Estimate Management:</strong>
    <ul>
      <li>Create New Estimate: Generate a new estimate for services or repairs.</li>
      <li>Modify: Modify an existing estimate.</li>
      <li>Clone: Duplicate an existing estimate to create a new one.</li>
      <li>Add Parts: Add parts to the estimate.</li>
      <li>Add Service: Add services to the estimate.</li>
    </ul>
  </li>

  <li><strong>CRM:</strong>
    <ul>
      <li>Add New Customer: Add new customer details into the CRM system.</li>
    </ul>
  </li>

  <li><strong>Ledger Management:</strong>
    <ul>
      <li>Product Ledger: Track the financial transactions related to products.</li>
      <li>Supplier Ledger: Maintain a ledger for suppliers.</li>
      <li>Vehicle Ledger: Track the financial details of vehicles being serviced.</li>
      <li>Job Ledger: Manage ledger entries for jobs completed in the workshop.</li>
      <li>Advance Ledger: Track advance payments and balances.</li>
    </ul>
  </li>

  <li><strong>Reports:</strong>
    <ul>
      <li>Estimate List: View a list of all estimates created.</li>
      <li>Draft Bills: View draft bills that are pending finalization.</li>
      <li>Main Bills: View finalized main bills.</li>
      <li>Receive: Generate reports on received payments.</li>
      <li>AIT: Generate AIT reports for tax purposes.</li>
      <li>VAT: Generate VAT reports for transactions.</li>
      <li>Purchase: Generate reports on purchase activities.</li>
      <li>Issue: Generate reports on issued items.</li>
      <li>Gross Profit: View reports on the gross profit generated.</li>
      <li>Due: Generate reports on due payments.</li>
      <li>Gate Pass: View gate pass reports for inventory movement.</li>
      <li>Accounting: Generate general accounting reports.</li>
      <li>WIP: View reports on Work In Progress items.</li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Centralized management of jobs, inventory, and financials in the workshop.</li>
  <li>Efficient billing and payment management, with multiple payment methods.</li>
  <li>Improved tracking of parts, services, and customer interactions.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Simplified and automated billing and estimation processes.</li>
  <li>Streamlined inventory management and stock tracking.</li>
  <li>Enhanced financial tracking and reporting capabilities.</li>
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