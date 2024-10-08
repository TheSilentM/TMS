
<!doctype html>
<html lang='en' data-bs-theme='auto'>
  <head><script src='js/color-modes.js'></script>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='the official blog of TMS'>
    <meta name='author' content='Mark Otto, Jacob Thornton, and Bootstrap contributors'>
    <meta name='generator' content='Hugo 0.122.0'>
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel='canonical' href='https://getbootstrap.com/docs/5.3/examples/blog/'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>

    

    <link rel='stylesheet' href='css/bootstrap.css'>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

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

      .background-img {
        background-image: url('img/main-news-img.png');
        background-repeat: no-repeat;
        background-position: center;
      }

      .position-relative {
        position: relative;
        left: 10%;
      }

      .h5:hover {
        color: #198754;
        cursor: pointer;
      }

      .min-height {
        min-height: 300px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href='https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap' rel='stylesheet'>
    <!-- Custom styles for this template -->
    <link href='blog.css' rel='stylesheet'>
  </head>
  <body>
    <svg xmlns='http://www.w3.org/2000/svg' class='d-none'>
      <symbol id='check2' viewBox='0 0 16 16'>
        <path d='M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
      </symbol>
      <symbol id='circle-half' viewBox='0 0 16 16'>
        <path d='M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z'/>
      </symbol>
      <symbol id='moon-stars-fill' viewBox='0 0 16 16'>
        <path d='M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z'/>
        <path d='M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z'/>
      </symbol>
      <symbol id='sun-fill' viewBox='0 0 16 16'>
        <path d='M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z'/>
      </symbol>
    </svg>

    <div class='dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle'>
      <button class='btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center'
              id='bd-theme'
              type='button'
              aria-expanded='false'
              data-bs-toggle='dropdown'
              aria-label='Toggle theme (auto)'>
        <svg class='bi my-1 theme-icon-active' width='1em' height='1em'><use href='#circle-half'></use></svg>
        <span class='visually-hidden' id='bd-theme-text'>Toggle theme</span>
      </button>
      <ul class='dropdown-menu dropdown-menu-end shadow' aria-labelledby='bd-theme-text'>
        <li>
          <button type='button' class='dropdown-item d-flex align-items-center' data-bs-theme-value='light' aria-pressed='false'>
            <svg class='bi me-2 opacity-50' width='1em' height='1em'><use href='#sun-fill'></use></svg>
            Light
            <svg class='bi ms-auto d-none' width='1em' height='1em'><use href='#check2'></use></svg>
          </button>
        </li>
        <li>
          <button type='button' class='dropdown-item d-flex align-items-center' data-bs-theme-value='dark' aria-pressed='false'>
            <svg class='bi me-2 opacity-50' width='1em' height='1em'><use href='#moon-stars-fill'></use></svg>
            Dark
            <svg class='bi ms-auto d-none' width='1em' height='1em'><use href='#check2'></use></svg>
          </button>
        </li>
        <li>
          <button type='button' class='dropdown-item d-flex align-items-center active' data-bs-theme-value='auto' aria-pressed='true'>
            <svg class='bi me-2 opacity-50' width='1em' height='1em'><use href='#circle-half'></use></svg>
            Auto
            <svg class='bi ms-auto d-none' width='1em' height='1em'><use href='#check2'></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns='http://www.w3.org/2000/svg' class='d-none'>
  <symbol id='aperture' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24'>
    <circle cx='12' cy='12' r='10'/>
    <path d='M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94'/>
  </symbol>
  <symbol id='cart' viewBox='0 0 16 16'>
    <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
  </symbol>
  <symbol id='chevron-right' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
  </symbol>
</svg>

   
<header data-bs-theme='dark'>
  <nav class='navbar navbar-expand-lg navbar-dark fixed-top bg-dark border-bottom border-success border-2'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='index.php'>TMS</a>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarCollapse'>
        <ul class='navbar-nav me-auto mb-2 mb-md-0'>
          <li class='nav-item mt-1'>
            <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
          </li>
          <li class='nav-item mt-1'>
            <a class='nav-link' href='login.php'>Login</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link" href="sign-up.php">Sign Up</a>
          </li>
          <li class='nav-item mt-1'>
            <a class='nav-link' href='contacts.php'>Contact Us</a>
          </li>
		  <li class='nav-item dropdown mt-1'>
			<button class='btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis active' data-bs-toggle='dropdown' aria-expanded='false'>
			  Resources
			</button>
			<ul class='dropdown-menu dropdown-menu-dark'>
			  <li><a class='dropdown-item' href='blog.php'>Blog</a></li>
			  <li><a class='dropdown-item' href='case-studies.php'>Case Studies</a></li>
        <li><a class='dropdown-item' href='ebooks-papers.php'>Ebooks and White papers</a></li>
			</ul>
		  </li>
		  <li class='nav-item dropdown mt-1'>
			<button class='btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis' data-bs-toggle='dropdown' aria-expanded='false'>
			  Solutions
			</button>
			<ul class='dropdown-menu dropdown-menu-dark'>
			  <li><a class='dropdown-item' href='platform.php'>TMS Platform</a></li>
			  <li><a class='dropdown-item' href='roi.php'>ROI Calculator</a></li>
			  <li><a class='dropdown-item' href='get-demo.php'>Get a Demo</a></li>
			  <li><a class='dropdown-item' href='pricing.php'>Pricing</a></li>
			</ul>
		  </li>
      <li class='nav-item dropdown mt-1'>
        <button class='btn btn-dark dropdown-toggle pt-2 pb-2 text-secondary-emphasis' data-bs-toggle='dropdown' aria-expanded='false'>
          Company
        </button>
        <ul class='dropdown-menu dropdown-menu-dark'>
          <li><a class='dropdown-item' href='about.php'>About Us</a></li>
          <li><a class='dropdown-item' href='careers.php'>Careers</a></li>
          <li><a class='dropdown-item' href='faq.php'>FAQ</a></li>
        </ul>
      </li>
      </ul>
		    <div class='pt-2 pb-2'>
          <form class="d-flex" role="search" action="search_alogrithm.php" method="POST">
          	<input class="form-control me-2" type="search" name="search_word" placeholder="Search" aria-label="Search">
          	<button class="btn btn-outline-success" type="submit">Search</button>
        	</form>
		    </div>
      </div>
    </div>
  </nav>
</header>

<div class='container pt-5 mt-5'>
    <div class='row flex-nowrap justify-content-center align-items-center'>
      <div class='col-4 text-center p-2'>
        <h2 class='h2 fw-bold p-5'>TMS BLOG</h2>
      </div>
    </div>
    <div class='row flex-nowrap justify-content-center align-items-center'>
      <div class='col-4 text-center pt-3'>
        <h6 class='h6 txt-emphasis-white'>Filter by Tag:</h6>
      </div>
    </div>


  <div class='nav-scroller mb-3 border-bottom'>
    <nav class='nav nav-underline justify-content-between'>
      <a class='nav-item nav-link link-body-emphasis' href='blog.php'>All</a>
      <a class='nav-item nav-link link-body-emphasis' href='freight.php'>Freight</a>
      <a class='nav-item nav-link link-body-emphasis active' href='customer-spotlight.php'>Customer Spotlight</a>
      <a class='nav-item nav-link link-body-emphasis' href='logistics.php'>Logistics</a>
      <a class='nav-item nav-link link-body-emphasis' href='updates-news.php'>Feature Updates</a>
      <a class='nav-item nav-link link-body-emphasis' href='tutorials-news.php'>Tutorials & Guides</a>
      <a class='nav-item nav-link link-body-emphasis' href='news.php'>News</a>
    </nav>
  </div>
</div>

<main class='container'>
  <div class='p-4 p-md-5 mb-4 rounded text-body-emphasis background-img'>
    <div class='col-lg-6 px-0 position-relative'>
      <h1 class='fst-italic'>Optimizing Less Than Truckload (LTL) Shipping with TMS Software</h1>
      <strong class='d-inline-block mb-2 text-white-emphasis'>Freight</strong>
      <p class='lead my-3'>Optimizing LTL shipping is vital for companies aiming to streamline their supply chain and reduce costs. With the increasing demand for efficient logistics solutions, Transportation Management System software has become an essential tool. 
        This blog post explores how TMS software can optimize LTL shipping, providing significant benefits for businesses.</p>
      <p class='lead mb-0'><a href='#' class='text-body-emphasis text-decoration-none fw-medium me-2'>Continue reading</a><i class='bi bi-arrow-right pb-4'></i></p>
    </div>
  </div>
<!--1° grid-->
<div class='row mb-2'>

<?php
require_once('connection.php');
$query = "SELECT DISTINCT categories_blog.categories, categories_blog.categories_ID, blog_news.news_title, blog_news.reading_time, blog_news.text_preview FROM categories_blog, blog_news WHERE categories_blog.categories_ID = 'CS'";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result)!=0) {
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  echo "
    <div class='col-md-6'>
      <div class='row g-0 min-height border rounded overflow-hidden flex-md-row mb-4 me-5 pe-2 shadow-sm h-md-250 position-relative'>
        <div class='col p-4 d-flex flex-column position-static'>
          <strong class='d-inline-block mb-2 text-primary-emphasis'>
            ".$row['categories']."
          </strong>
          <h5 class='h5 mb-1'>".$row['news_title']."</h5>
          <div class='mb-1 text-body-secondary'>".$row['reading_time']." min read</div>
          <p class='card-text mb-auto'>".$row['text_preview']."</p>
          <a href='#' class='icon-link gap-1 icon-link-hover stretched-link text-decoration-none'>
            Continue reading
            <svg class='bi'><use xlink:href='#chevron-right'/></svg>
          </a>
        </div>
        <div class='col-auto d-none d-lg-block'>
          <svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'/><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text></svg>
        </div>
      </div>
    </div>
  ";
  }
};
?>
</div>

</main>
  <div class='container'>
    <footer class='row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top'>
      <div class='col mb-3'>
        <a href='#' class='d-flex align-items-center mb-3 link-body-emphasis text-decoration-none'>
          <h4>TMS</h4>
        </a>
        <p>TMS is a cloud-based software that makes logistics simple.</p>
        <p class='text-body-secondary'>&copy; 2024</p>
      </div>
  
      <div class='col mb-3'>
  
      </div>
  
      <div class='col mb-3'>
        <h5>Solutions</h5>
        <ul class='nav flex-column'>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>TMS Platform</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>ROI Calculator</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Consulting Solutions</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Pricing</a></li>
        </ul>
      </div>
  
      <div class='col mb-3'>
        <h5>Resources</h5>
        <ul class='nav flex-column'>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Blog</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Learning Platform</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Case Studies</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Ebooks and White papers</a></li>
        </ul>
      </div>
  
      <div class='col mb-3'>
        <h5>Contact Us</h5>
        <ul class='nav flex-column'>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Home</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>About Us</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>Pricing</a></li>
          <li class='nav-item mb-2'><a href='#' class='nav-link p-0 text-body-secondary'>FAQs</a></li>
        </ul>
        <p class='float-end'><a href='#'><i class='bi bi-arrow-up-square-fill h2'></i></a></p>
      </div>
    </footer>
  </div>
  <script src='js/bootstrap.bundle.min.js'></script>
  </body>
</html>
