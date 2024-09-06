<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head><script src="js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transport Management System">
    <title>Transport Management System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
	<!--<link rel="stylesheet" href="stile.css">-->

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<!--<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">-->


    <style>

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      
      .h1 {
        font-size: 64px;
        margin: 0;
        padding: 0;
      }

      .h2 {
        font-size: 36px;
        margin: 0;
        padding: 0;
      }

      .paragraph {
        font-weight: 600;
        font-size: 16px;
      }

      .bg-light-subtle {
        box-shadow: 0 3px 10px 6px rgb(0 240 0 / 0.2);
      }

      @media screen and (max-width: 1000px) {
        .w-50 {
          width: 100% !important;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

  
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-success border-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">TMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item mt-1">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="sign-up.php">Sign Up</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="contacts.php">Contact Us</a>
          </li>
		  <li class="nav-item dropdown mt-1">
			<button class="btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
			  Resources
			</button>
			<ul class="dropdown-menu dropdown-menu-dark">
			  <li><a class="dropdown-item" href="blog.php">Blog</a></li>
			  <li><a class="dropdown-item" href="case-studies.php">Case Studies</a></li>
        <li><a class="dropdown-item" href="ebooks-papers.php">Ebooks and White papers</a></li>
			</ul>
		  </li>
		  <li class="nav-item dropdown mt-1">
			<button class="btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
			  Solutions
			</button>
			<ul class="dropdown-menu dropdown-menu-dark">
			  <li><a class="dropdown-item" href="platform.php">TMS Platform</a></li>
			  <li><a class="dropdown-item" href="roi.php">ROI Calculator</a></li>
			  <li><a class="dropdown-item" href="get-demo.php">Get a Demo</a></li>
			  <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
			</ul>
		  </li>
      <li class="nav-item dropdown mt-1">
        <button class="btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis active" data-bs-toggle="dropdown" aria-expanded="false">
          Company
        </button>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="about.php">About Us</a></li>
          <li><a class="dropdown-item" href="careers.php">Careers</a></li>
          <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
        </ul>
      </li>
      </ul>
		    <div class="pt-2 pb-2">
          <form class="d-flex" role="search" action="search_algorithm.php" method="POST">
          	<input class="form-control me-2" type="search" name="search_word" placeholder="Search" aria-label="Search">
          	<button class="btn btn-outline-success" type="submit">Search</button>
        	</form>
		    </div>
      </div>
    </div>
  </nav>
</header>

<main>
<!--General-->
    <div class="container-fluid">
        <div class="row bg-light-subtle z-1 p-5">
            <div class="container-text text-center">
                <h1 class="h1 p-3 fw-bold">FAQ</h1>
                <h4 class="h4 fw-bold pb-5">You have Questions. We have Answers.</h4>
            </div>
        </div>
        <div class="row p-5">
            <div class="container-text text-center">
                <h2 class="h2 p-3 fw-bold">General</h2>
                <div class="accordion w-50 m-auto py-4" id="accordionExample">
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       What makes TMS special?
                      </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">We're a simple web based solution for a traditionally complicated and expensive business necessity. 
                          From the ground up, 
                          we're built by shippers with the goal of delivering a TMS solution that provides ease of use while bringing savings of up to 10 - 30% on freight.
                        </p>
                      </div>
                    </div>
                  </div> 
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                       What is a TMS?
                      </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">A TMS (Transportation Management Software) is used to manage the shipping and logistics within a company. 
                          It enables companies to move shipments from the origin to destination cost effectively and efficiently.
                        </p>
                      </div>
                    </div>
                  </div> 
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingThree">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                       What is Centralized Freight Tracking?
                      </button>
                    </h4>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">Centralized tracking allows you to see all your shipments in transit within a single window and get updated tracking details on any individual shipments from any carrier.
                        </p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
          </div>
          <!--pricing & payments-->
          <div class="row">
            <div class="container-text text-center p-5">
                <h2 class="h2 p-3 fw-bold">Pricing & Payments</h2>
                <div class="accordion w-50 m-auto py-4" id="accordionExample">
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFour">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                       What payment methods do you accept?
                      </button>
                    </h4>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">We accept credit cards, company check, and ACH payments.
                        </p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
          </div>
          <!--Products-->
          <div class="row">
            <div class="container-text text-center p-5">
                <h2 class="h2 p-3 fw-bold">Products</h2>
                <div class="accordion w-50 m-auto py-4" id="faq">
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        Can I process a shipment directly from FreightPOP?
                      </button>
                    </h4>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">Yes, you can process a shipment directly from TMS. 
                          Once processed, 
                          the system will allow you to print the shipping label or BOL the carrier would normally give you.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        What is required so that I can see my rates for a carrier?
                      </button>
                    </h4>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">To add a carrier,
                           you may need to enter your account number, user name, password, and for some carriers, additional information. 
                          Each carrier is different, our app will guide you through the process.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        How does TMS invoice auditing save me money?
                      </button>
                    </h4>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="paragraph">There are instances when carriers make errors in invoicing, 
                          and may not invoice you at the rate provided when the shipment was processed. 
                          Our system will help catch any discrepancies.
                           On average, customers find about 8 to 17% savings through freight invoice auditing.
                        </p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
          </div>
      </div>
</main>
      
       


<hr class="col-10 m-auto border-3">

    <!-- FOOTER -->
    <div class="container">
  <footer class="row text-center text-lg-start text-white justify-content-center py-5">
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 py-3 px-5">
        <a href="index.php" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none justify-content-center">
          <h4>TMS</h4>
        </a>
        <p>TMS is a cloud-based software that makes logistics simple.</p>
        <p class="text-body-secondary">&copy; 2024</p>
      </div>

      <div class="col-lg-2 col-md-6 mb-4 mb-md-0 mb-3">
        <h5>Solutions</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="platform.php" class="nav-link p-0 text-body-secondary">TMS Platform</a></li>
          <li class="nav-item mb-2"><a href="roi.php" class="nav-link p-0 text-body-secondary">ROI Calculator</a></li>
          <li class="nav-item mb-2"><a href="get-demo.php" class="nav-link p-0 text-body-secondary">Get a Demo</a></li>
          <li class="nav-item mb-2"><a href="pricing.php" class="nav-link p-0 text-body-secondary">Pricing</a></li>
        </ul>
      </div>
  
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5>Resources</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="blog.php" class="nav-link p-0 text-body-secondary">Blog</a></li>
          <li class="nav-item mb-2"><a href="case-studies.php" class="nav-link p-0 text-body-secondary">Case Studies</a></li>
          <li class="nav-item mb-2"><a href="ebooks-papers.php" class="nav-link p-0 text-body-secondary">Ebooks and White papers</a></li>
        </ul>
      </div>
  
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5>Contact Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-body-secondary">About Us</a></li>
          <li class="nav-item mb-2"><a href="careers.php" class="nav-link p-0 text-body-secondary">Careers</a></li>
          <li class="nav-item mb-2"><a href="faq.php" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        </ul>
        <p class="float-end"><a href="#"><i class="bi bi-arrow-up-square-fill h2"></i></a></p>
      </div>
    </footer>
  </div>
  <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>