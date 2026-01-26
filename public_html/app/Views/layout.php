<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="baseURL" value="<?= base_url() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Digital Expansion Pvt Ltd | IT Services Company in India | Web, Salesforce & Shopify Experts | IT Services Company in Noida</title>
  <meta name="description" content="Digital Expansion Pvt Ltd provides expert Web, Salesforce, Shopify & Mobile App development services in Noida, India for growing businesses.">
  <meta name="keywords" content="IT services company, IT solutions provider, Software development company, Web development company, Custom software development company, Digital transformation company, Technology consulting company, Offshore development company, Remote development team">
  <!-- Open Graph tags -->
  <meta property="og:title" content="Digital Expansion Pvt Ltd | IT Services Company in India | Web, Salesforce & Shopify Experts | IT Services Company in Noida">
  <meta property="og:description" content="Digital Expansion Pvt Ltd provides expert Web, Salesforce, Shopify & Mobile App development services in Noida, India for growing businesses.">
  <meta property="og:image" content=https://www.digitalexpansion.in/images/og-image.jpg">
  <meta property="og:url" content="https://www.digitalexpansion.in/">
  <!-- Twitter Card tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Digital Expansion Pvt Ltd | IT Services Company in India | Web, Salesforce & Shopify Experts | IT Services Company in Noida">
  <meta name="twitter:description" content="Digital Expansion Pvt Ltd provides expert Web, Salesforce, Shopify & Mobile App development services in Noida, India for growing businesses.">
  <meta name="twitter:image" content="https://www.digitalexpansion.in/images/og-image.jpg">
  <!-- favicon -->
  <link rel="icon" href="<?= base_url('images/favicon.ico'); ?>" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>public/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>public/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>public/images/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url(); ?>public/images/site.webmanifest">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>" />
  <!-- Js -->
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script src="<?= base_url('/js/book-nowscript.js'); ?>"></script>
  <script src="<?= base_url('/js/application.js'); ?>"></script>
  <link rel="canonical" href="<?= current_url(); ?>" />
</head>

<body>
  <!-- header start -->
  <style>
    .whatsapp-float {
      position: fixed;
      bottom:60px;
      right: 30px;
      z-index: 100;
    }
    .my-float {
      margin-top: 16px;
    }
    .main-wrapper {
      width: 90%;
      margin: 0 auto;
    }
  </style>

  <header>
    <div class="header-top blue-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hot-line">
              <?php if ($app_data->primary_phone_number) { ?>
                <div>
                  <a href="tel:<?= str_replace(" ", "", $app_data->primary_phone_number); ?>"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                      <path d="M23,11a1,1,0,0,1-1-1,8.008,8.008,0,0,0-8-8,1,1,0,0,1,0-2A10.011,10.011,0,0,1,24,10,1,1,0,0,1,23,11Zm-3-1a6,6,0,0,0-6-6,1,1,0,1,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0Zm2.183,12.164.91-1.049a3.1,3.1,0,0,0,0-4.377c-.031-.031-2.437-1.882-2.437-1.882a3.1,3.1,0,0,0-4.281.006l-1.906,1.606A12.784,12.784,0,0,1,7.537,9.524l1.6-1.9a3.1,3.1,0,0,0,.007-4.282S7.291.939,7.26.908A3.082,3.082,0,0,0,2.934.862l-1.15,1C-5.01,9.744,9.62,24.261,17.762,24A6.155,6.155,0,0,0,22.183,22.164Z" />
                    </svg>
                    <span class="d-none d-lg-inline-block d-xl-inline-block">Call
                      Anytime</span>
                    <?= $app_data->primary_phone_number ?></span></a>
                </div>
              <?php } ?>
              <div class="ml-5"> <a href="mailto:<?= $app_data->primary_email ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24">
                    <path d="M23.954,5.542,15.536,13.96a5.007,5.007,0,0,1-7.072,0L.046,5.542C.032,5.7,0,5.843,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6C24,5.843,23.968,5.7,23.954,5.542Z" />
                    <path d="M14.122,12.546l9.134-9.135A4.986,4.986,0,0,0,19,1H5A4.986,4.986,0,0,0,.744,3.411l9.134,9.135A3.007,3.007,0,0,0,14.122,12.546Z" />
                  </svg>
                  <span class=""><?= $app_data->primary_email ?></span></a>
              </div>
              <!-- Header Social Links Section -->
              <div class="social d-none d-lg-inline-block d-xl-inline-block">
                <ul>
                  <?php if ($app_data->facebook_link) { ?>
                    <li>
                      <a href="<?= $app_data->facebook_link ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                          <g>
                            <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                          </g>
                        </svg>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if ($app_data->linkedin_link) { ?>
                    <li>
                      <a href="<?= $app_data->linkedin_link ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                          <g>
                            <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                            <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                            <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                          </g>
                        </svg>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if ($app_data->instagram_link) { ?>
                    <li>
                      <a href="<?= $app_data->instagram_link ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                          <g>
                            <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                            <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                            <circle cx="18.406" cy="5.594" r="1.44" />
                          </g>
                        </svg>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-header animate__animated">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg site-navbar">
              <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('/images/horizontal_500x160.png'); ?>" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?= base_url('/images/menu.png'); ?>" alt="menu" />
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link active" href="<?= base_url(); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('services'); ?>">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link book-btn" href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal">Schedule a call</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- main wrapper start -->
  <div class="main-wrapper">
    <?= $this->renderSection('content') ?>
  </div>
  <!-- main wrapper end -->
  <!-- footer section start -->
  <hr />
  <footer>
    <div class="footer-sec pt-50 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <a class="logo-footer mb-3" href="<?= $base_url; ?>">
              <img src="<?= base_url('/images/horizontal_500x160.png'); ?>" alt="Logo" width="230" />
            </a>
            <p class=" mt-3">
              Address : <?= $app_data->address ?>
            </p>
            <p class=" mt-1">
              Contact No : <?= $app_data->primary_phone_number ?>
              <?= $app_data->secondary_phone_number ? '/ ' . $app_data->secondary_phone_number : "" ?>
            </p>
            <p class="">
              Email : <?= $app_data->primary_email ?>
            </p>
            <!-- Footer Social Links Section -->
            <ul class="social-list">
              <?php if ($app_data->facebook_link) { ?>
                <li>
                  <a href="<?= $app_data->facebook_link ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                      <g>
                        <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                      </g>
                    </svg>
                  </a>
                </li>
              <?php } ?>
              <?php if ($app_data->linkedin_link) { ?>
                <li>
                  <a href="<?= $app_data->linkedin_link ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                      <g>
                        <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                        <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                        <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                      </g>
                    </svg>
                  </a>
                </li>
              <?php } ?>
              <?php if ($app_data->instagram_link) { ?>
                <li>
                  <a href="<?= $app_data->instagram_link ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                      <g>
                        <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                        <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                        <circle cx="18.406" cy="5.594" r="1.44" />
                      </g>
                    </svg>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="col-md-6 col-sm-12 col-12">
            <h5 class="footer-title ">
              Links
            </h5>
            <ul class="quick-links">
              <li>
                <a href="#!" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>Home</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url . 'about'; ?>" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>About Digital Expansion</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url . 'services'; ?>" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>Services</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url . 'contact'; ?>" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>Contact Us</span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>Schedule a Call</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright black-dark-shade-1 py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class=" mb-0">&copy; 2026 Digital Expansion Private Limited. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="https://wa.me/918420218585" target="_blank" class="whatsapp-float">
      <img src="http://localhost/images/icons/ui_revamp_whatsapp_icon.svg" alt="Chat on WhatsApp" class="my-float" style="width:50px;height:50px;" <?= base_url('/images/icons/ui_revamp_whatsapp_icon.svg'); ?>>
    </a>
  </footer>
  <!-- footer section end -->
  <!-- Book Now Modal -->
  <div class="modal fade book-now-modal" id="bookNowModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body position-relative">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card px-0 pb-0 mt-3 mb-3">
                <div class="text-center mb-4 mt-3"> <img src="<?= base_url('/images/horizontal_500x160.png'); ?>" alt="Logo" class="book-logo" /></div>
                <h2 class="heading text-center">Schedule a call</h2>
                <p class="para text-center">
                  Please enter your details and we will reach out to you assoon as we can.
                </p>
                <form class="msform" id="save-booking">
                  <div class="form-card pr-5 pl-5">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Name *</label>
                          <input type="text" name="name" placeholder="Enter Your Name" class="form-control required" title="Name" data-input-type="default" data-minlength="4" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Mobile Number *</label>
                          <input type="text" name="phone_number" data-mask="" data-inputmask="'mask': '9999999999'" placeholder="Enter Your Mobile Number" class="form-control required" title="Mobile Number" data-input-type="contactNumber" data-minlength="10" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Email Address *</label>
                          <input type="text" name="email" placeholder="Enter Your Email Address" class="form-control required" title="Email Address" data-input-type="email" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Location *</label>
                          <select class="form-control required" name="address" title="City" data-input-type="default">
                            <option value="">- Select -</option>
                            <?php foreach ($city_list as $dt) { ?>
                              <option value="<?= $dt->name ?>, <?= $dt->pin ?>">
                                <?= $dt->name ?>, <?= $dt->pin ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Service Type *</label>
                          <select class="form-control required" name="service_id" id="service-type-input" title="Service Type" data-input-type="default">
                            <option value="">- Select -</option>
                            <?php foreach ($services_list as $dt) { ?>
                              <option value="<?= $dt->id ?>"><?= $dt->name ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="fieldlabels">Preferred Date *</label>
                          <input id="datepicker" readonly type="text" name="booking_date" placeholder="Select Date" class="form-control required" title="Date" data-input-type="date" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <input type="button" class="action-button" value="Submit" id="submit" /> -->
                </form>
                <div class="msform">
                  <div class="form-card d-none save-booking-success">
                    <h2 class="text-default text-center mb-0"><strong>Thank You !</strong>
                    </h2>
                    <div class="text-center my-4">
                      <svg class="thankyou-tick" height="50" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                        <path d="m16.298,8.288l1.404,1.425-5.793,5.707c-.387.387-.896.58-1.407.58s-1.025-.195-1.416-.585l-2.782-2.696,1.393-1.437,2.793,2.707,5.809-5.701Zm7.702,3.712c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-2,0c0-5.514-4.486-10-10-10S2,6.486,2,12s4.486,10,10,10,10-4.486,10-10Z" />
                      </svg>
                    </div>
                    <div class="text-center">
                      <h5 class="text-muted text-center">We will reach out to you as soon as we can.</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <p class="form-message error"></p>
          <div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn theme-red-dark-btn submit-button" onclick="return _handleFormValidate('save-booking', 'formdata', _saveBooking);">Submit</button>
            <button class="btn btn theme-red-dark-btn loading-button d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Submitting...
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a title="Back to top" href="javascript:void(0);" class="scroll-top">
    <img src="<?= base_url('/images/icons/up-arrow.svg'); ?>" alt="Up">
  </a>
</body>
<script src="<?= base_url('/admin/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<script src="<?= base_url('/js/system.js'); ?>"></script>
<script>
  $(function() {
    $('[data-mask]').inputmask();
  });

  $('#bookNowModal').on('hidden.bs.modal', function() {
    $("#save-booking").trigger("reset");
    $('#save-booking').removeClass("d-none");
    $('#save-booking').addClass("d-block");
    $('.save-booking-success').addClass("d-none");
    $('.save-booking-success').removeClass("d-block");
    $('#bookNowModal .submit-button').removeClass("d-none");
    if (!!document.querySelector('#bookNowModal .input-message')) {
      document.querySelectorAll('#bookNowModal .input-message').forEach(function(element) {
        element.remove();
      });
    }
  });

  function _setServiceId(id) {
    $("#service-type-input").val(id);
  }
</script>

</html>