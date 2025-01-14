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
                  <img src="/assets/portfolio/BudgetAccounting/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/4.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/5.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/6.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/7.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/8.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/9.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/10.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/11.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/12.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/13.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/portfolio/BudgetAccounting/14.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Budget Management Accounting Software</li>
                <!-- <li><strong>Client</strong>: Equation IT</li> -->
                <li><strong>Project date</strong>: 2019-20</li>
                <li><strong>Project Demo URL</strong>: <a target="_blank" href="https://budgetaccounting.equation.wmd-hosting.com/">https://budgetaccounting.equation.wmd-hosting.com/</a></li>
                <li><strong>Tech Stack</strong>: Laravel (Backend), MySQL (DB)</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">

            <h5>Budget Management Accounting Software</h5>
<p><strong>Tech Stack:</strong> Laravel (Backend)</p>

<h5>Overview:</h5>
<p>The "Budget Management Accounting Software" is designed to streamline the process of managing budgets, payroll, expenses, and reports within an organization. It provides efficient budget preparation, allocation, reallocation, and approval processes, as well as comprehensive payroll and expense management features.</p>

<h5>Key Features:</h5>
<ul>
  <li><strong>Dashboard:</strong> A central hub to view an overview of the financial activities, budget status, and reports.</li>
  
  <li><strong>User Management:</strong>
    <ul>
      <li>User: Manage users of the system.</li>
      <li>Entry: Manage entries made in the system.</li>
    </ul>
  </li>

  <li><strong>Fiscal Year Management:</strong> Manage fiscal years for budgeting purposes.</li>

  <li><strong>Office, Designation & Employee Management:</strong>
    <ul>
      <li>Office: Define and manage office information.</li>
      <li>Designation: Define employee designations.</li>
      <li>Employee: Manage employee records and details.</li>
    </ul>
  </li>

  <li><strong>Supplier Management:</strong>
    <ul>
      <li>Supplier: Manage supplier details and information.</li>
    </ul>
  </li>

  <li><strong>Economic Codes Management:</strong>
    <ul>
      <li>Operation Codes: Manage operation codes for financial activities.</li>
      <li>Economic Group: Define and manage economic groups.</li>
      <li>Economic Sub Group: Define economic subgroups for detailed classification.</li>
      <li>Economic Code: Manage economic codes for various transactions.</li>
      <li>Deduction Code: Set up deduction codes for financial calculations.</li>
    </ul>
  </li>

  <li><strong>Budget Preparation:</strong>
    <ul>
      <li>Budgets Preparation: Manage the creation of new budgets.</li>
      <li>Revised Budgets: Track revisions to previously approved budgets.</li>
      <li>Reappropriation Budgets: Manage reallocation and appropriation of funds.</li>
      <li>All Budgets: View all created budgets.</li>
      <li>Incoming Budgets: Track incoming budgets.</li>
      <li>Processing Budgets: Track budgets currently under processing.</li>
      <li>Pending Budgets: View budgets pending approval.</li>
      <li>Approved Budgets: View approved budgets.</li>
      <li>Rejected Budgets: View budgets that have been rejected.</li>
    </ul>
  </li>

  <li><strong>Allocated Budget:</strong> Manage and view allocated budget amounts for various categories.</li>

  <li><strong>Budget Adjustments:</strong>
    <ul>
      <li>Budget Surrender: Process surrendered budgets.</li>
      <li>Budget Reallocate: Reallocate budgets based on new requirements.</li>
    </ul>
  </li>

  <li><strong>Payroll Management:</strong>
    <ul>
      <li>Employee Salary Entry: Record and manage employee salary details.</li>
      <li>Salary Generate: Generate employee salaries for payroll.</li>
    </ul>
  </li>

  <li><strong>Expense Management:</strong>
    <ul>
      <li>Bill Register: Track and manage bills.</li>
      <li>Cheque Entry: Record and manage cheque entries.</li>
    </ul>
  </li>

  <li><strong>Reports:</strong>
    <ul>
      <li>CashBook:
        <ul>
          <li>General Cashbook</li>
          <li>Bank Wise Cashbook</li>
        </ul>
      </li>
      <li>Salary Report: Track and report on employee salaries.</li>
      <li>Expenditure Report: Monitor expenses across different categories.</li>
      <li>District Expense Report: Track district-wise expenses.</li>
      <li>Division Expense Report: Monitor expenses at the division level.</li>
      <li>AG Office Monthly Report: Generate monthly reports for the Accounts General Office.</li>
      <li>Employee C/D Report: Report on employee contributions and deductions.</li>
      <li>Employee Deduction: Manage and report on employee salary deductions.</li>
      <li>Economic Code Wise Report: View detailed reports based on economic codes.</li>
      <li>Employee Salary: View salary breakdowns for each employee.</li>
      <li>Budget Surrender List: View a list of surrendered budgets.</li>
      <li>Budget Reallocation List: Track budgets that have been reallocated.</li>
      <li>Supplier Reports:
        <ul>
          <li>Supplier Tax Report</li>
          <li>Supplier VAT Report</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<h5>Challenges Addressed:</h5>
<ul>
  <li>Efficient management of large-scale budget preparations, revisions, and reallocations.</li>
  <li>Streamlining payroll and expense tracking processes within the organization.</li>
  <li>Centralized reporting system for better financial transparency and accountability.</li>
</ul>

<h5>Achievements:</h5>
<ul>
  <li>Simplified the process of managing budgets, reducing administrative workload.</li>
  <li>Improved accuracy and transparency in payroll and expense tracking.</li>
  <li>Enhanced financial reporting capabilities, providing more detailed insights into organizational finances.</li>
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