<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="baseURL" value="<?= base_url() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Digital Expansion Pvt Ltd | IT Services Company in India | Web, Salesforce & Shopify Experts | IT Services Company in Noida</title>
  <meta name="description" content="<?= isset($description) ? esc($description) : "CritiHome offers expert home healthcare, nursing, physiotherapy, and elder care services in Kolkata. Book now for compassionate care at home." ?>">
  <meta name="keywords" content="IT services company, IT solutions provider, Software development company, Web development company, Custom software development company, Digital transformation company, Technology consulting company, Offshore development company, Remote development team">
  <!-- Open Graph tags -->
  <meta property="og:title" content="CritiHome - Home Healthcare Services">
  <meta property="og:description" content="Expert home healthcare and nursing services in Kolkata.">
  <meta property="og:image" content=https://www.digitalexpansion.in/images/og-image.jpg">
  <meta property="og:url" content="https://www.digitalexpansion.in/">
  <!-- Twitter Card tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="CritiHome - Home Healthcare Services">
  <meta name="twitter:description" content="Expert home healthcare and nursing services in Kolkata.">
  <meta name="twitter:image" content="https://www.critihome.in/images/og-image.jpg">
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
              <div class="d-none"><a href="#care-plans-sec">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                      <path d="M2515 5006 c-54 -24 -60 -38 -65 -180 l-5 -131 -120 -12 c-307 -32 -586 -115 -855 -255 -497 -258 -894 -700 -1097 -1221 -38 -99 -74 -207 -67 -207 2 0 29 17 61 37 79 50 197 100 311 131 87 23 115 26 272 26 157 0 185 -3 272 -26 115 -31 232 -81 312 -132 l58 -37 116 60 c144 73 287 123 451 159 117 25 143 26 371 26 218 0 257 -2 350 -22 156 -34 335 -97 467 -163 l116 -59 46 30 c261 167 599 213 910 124 108 -31 247 -98 330 -159 34 -25 65 -45 67 -43 6 7 -83 261 -126 358 -250 567 -756 1037 -1340 1245 -195 70 -507 135 -646 135 l-34 0 0 128 c0 143 -7 164 -66 188 -40 17 -50 17 -89 0z" />
                      <path d="M1512 2608 c-190 -19 -369 -146 -456 -323 -35 -69 -65 -180 -66 -235 0 -19 -9 -30 -34 -44 -38 -20 -66 -68 -66 -111 0 -70 63 -132 123 -122 30 4 34 1 66 -53 149 -257 476 -360 752 -237 108 48 228 161 274 258 15 31 20 34 51 31 59 -7 124 57 124 123 0 39 -33 92 -70 113 -24 14 -30 25 -35 67 -30 242 -193 443 -417 514 -57 19 -166 27 -246 19z m296 -552 c50 -52 111 -93 180 -121 71 -29 75 -45 31 -134 -78 -159 -257 -271 -434 -271 -220 0 -443 178 -469 374 -5 42 -4 47 10 42 9 -4 56 -9 103 -13 164 -11 331 42 456 146 54 44 61 48 73 33 7 -10 29 -34 50 -56z" />
                      <path d="M3478 2371 c-118 -38 -205 -131 -255 -272 -22 -63 -27 -93 -29 -204 -1 -88 -7 -148 -19 -185 -17 -56 -63 -146 -97 -189 -10 -13 -17 -26 -15 -28 5 -4 291 -62 294 -59 2 1 -10 27 -26 57 -34 62 -59 174 -61 274 -3 117 -7 110 53 111 30 0 72 10 100 22 60 27 174 135 224 213 21 33 41 59 44 59 4 0 12 -13 19 -30 22 -53 109 -129 196 -171 l83 -39 11 -57 c21 -101 -2 -219 -71 -357 -22 -43 -39 -80 -37 -81 3 -3 258 51 286 60 9 4 7 11 -9 27 -29 31 -56 92 -79 183 -16 63 -18 95 -13 184 7 135 -14 218 -81 308 -50 68 -154 143 -241 174 -86 25 -198 25 -277 0z" />
                      <path d="M2500 1715 c-74 -21 -127 -54 -184 -114 -55 -60 -81 -114 -94 -193 -7 -45 -15 -62 -40 -83 -25 -21 -32 -35 -32 -61 0 -46 40 -88 76 -81 21 4 28 -2 44 -32 26 -52 111 -128 178 -159 76 -36 207 -37 292 -4 64 25 157 103 185 156 11 20 27 36 37 36 53 0 97 54 83 102 -9 29 -34 58 -50 58 -7 0 -15 23 -19 56 -26 221 -261 379 -476 319z m243 -348 c24 -24 69 -56 100 -71 31 -14 57 -32 57 -39 -1 -30 -43 -101 -85 -141 -142 -139 -389 -104 -490 68 -13 23 -27 57 -30 76 l-5 35 112 0 c103 0 118 3 168 27 30 15 71 41 90 57 19 17 36 30 37 31 1 0 22 -20 46 -43z" />
                      <path d="M1378 1200 c-272 -69 -506 -276 -603 -535 -43 -113 -55 -200 -55 -391 l0 -174 605 0 605 0 0 68 c0 309 106 535 307 655 29 17 53 36 53 40 0 5 -44 52 -97 105 -112 111 -197 164 -343 213 -87 30 -107 33 -245 36 -123 2 -164 -1 -227 -17z" />
                      <path d="M3461 1210 c-88 -19 -198 -61 -276 -107 -82 -47 -265 -216 -265 -244 0 -8 17 -23 37 -34 54 -29 163 -141 205 -210 20 -33 49 -96 64 -140 24 -70 28 -99 32 -227 l4 -148 614 0 614 0 0 154 c0 85 -5 190 -11 232 -26 191 -100 338 -243 480 -108 108 -208 170 -346 216 -86 28 -109 31 -240 34 -80 2 -165 -1 -189 -6z" />
                      <path d="M2481 815 c-187 -41 -337 -171 -408 -351 -23 -61 -27 -87 -31 -216 l-4 -148 561 0 561 0 0 108 c-1 209 -45 329 -169 453 -141 141 -320 195 -510 154z" />
                    </g>
                  </svg>
                  <span class="d-none d-lg-inline-block d-xl-inline-block">Long Term Care Plans</span>
                </a>
              </div>
              <div class="d-none"><a href="#pricing-plan">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                      <path d="M2505 5015 c-20 -20 -25 -34 -25 -78 l0 -55 -67 -6 c-527 -53 -963 -299 -1275 -719 -198 -268 -316 -601 -335 -948 -6 -116 -6 -117 20 -143 37 -37 82 -35 116 6 14 17 49 55 77 84 90 91 278 164 424 164 81 0 198 -29 287 -70 79 -37 137 -85 214 -178 36 -44 81 -44 118 -1 83 98 109 122 160 153 61 38 194 86 235 86 l26 0 0 -495 0 -495 80 0 80 0 0 495 c0 469 1 495 18 495 41 0 140 -33 213 -71 73 -38 94 -57 199 -176 27 -32 74 -30 103 3 81 94 148 152 209 182 192 94 406 94 598 0 59 -29 125 -87 207 -182 30 -35 75 -35 110 0 26 26 26 27 20 143 -20 359 -139 687 -353 972 -288 382 -714 627 -1191 686 l-133 17 0 53 c0 65 -30 103 -80 103 -19 0 -40 -9 -55 -25z m127 -376 c227 -202 393 -522 443 -854 22 -148 18 -475 -6 -475 -4 0 -34 18 -65 40 -69 48 -191 97 -292 116 -199 38 -425 -5 -588 -112 -37 -24 -70 -44 -74 -44 -11 0 -20 111 -20 248 0 412 151 781 433 1055 49 48 92 87 95 87 2 0 35 -28 74 -61z" />
                      <path d="M1920 2147 c-49 -16 -133 -102 -148 -153 -28 -94 -8 -169 63 -239 27 -28 66 -56 85 -62 32 -10 29 -11 -44 -12 -108 -1 -152 -17 -206 -71 -66 -66 -70 -87 -70 -389 l0 -261 80 -40 80 -40 0 -400 0 -400 240 0 240 0 0 400 0 400 80 40 80 40 0 268 c0 247 -2 270 -21 312 -44 98 -117 139 -249 141 l-85 1 42 15 c26 9 59 33 86 63 90 100 90 220 0 320 -65 72 -158 97 -253 67z" />
                      <path d="M3040 2147 c-49 -16 -133 -102 -148 -153 -28 -94 -8 -169 63 -239 27 -28 66 -56 85 -62 32 -10 29 -11 -44 -12 -108 -1 -152 -17 -206 -71 -66 -66 -70 -87 -70 -389 l0 -261 80 -40 c70 -35 80 -43 75 -63 -6 -24 -155 -769 -155 -774 0 -2 180 -3 400 -3 220 0 400 1 400 3 0 5 -149 750 -155 774 -5 20 5 28 75 63 l80 40 0 268 c0 247 -2 270 -21 312 -44 98 -117 139 -249 141 l-85 1 42 15 c26 9 59 33 86 63 90 100 90 220 0 320 -65 72 -158 97 -253 67z" />
                      <path d="M892 1669 c-48 -14 -109 -80 -123 -131 -14 -54 -5 -120 22 -165 24 -38 83 -82 114 -85 11 -1 -21 -4 -72 -7 -98 -7 -126 -19 -167 -75 -19 -25 -21 -44 -24 -224 l-3 -197 65 -32 c36 -18 66 -38 66 -45 0 -7 14 -146 30 -308 16 -162 30 -301 30 -307 0 -10 33 -13 130 -13 97 0 130 3 130 13 0 6 14 145 30 307 16 162 30 301 30 308 0 7 30 27 66 45 l65 32 -3 197 c-3 180 -5 199 -24 224 -42 57 -69 68 -167 74 -69 4 -84 7 -60 12 46 10 109 77 124 130 33 126 -47 244 -172 253 -30 3 -69 0 -87 -6z" />
                      <path d="M4092 1669 c-48 -14 -109 -80 -123 -131 -14 -54 -5 -120 22 -165 24 -38 83 -82 114 -85 11 -1 -21 -4 -72 -7 -98 -7 -126 -19 -167 -75 -19 -25 -21 -44 -24 -224 l-3 -197 65 -32 c36 -18 66 -38 66 -45 0 -7 14 -146 30 -308 16 -162 30 -301 30 -307 0 -10 33 -13 130 -13 97 0 130 3 130 13 0 6 14 145 30 307 16 162 30 301 30 308 0 7 30 27 66 45 l65 32 -3 197 c-3 180 -5 199 -24 224 -42 57 -69 68 -167 74 -69 4 -84 7 -60 12 46 10 109 77 124 130 33 126 -47 244 -172 253 -30 3 -69 0 -87 -6z" />
                    </g>
                  </svg>
                  <span class="d-none  d-lg-inline-block d-xl-inline-block"> Critihealth Annual Plan</span></a>
              </div>
              <div class="social d-none  d-lg-inline-block d-xl-inline-block">
                <ul>
                  <li>
                    <a href="<?= $app_data->facebook_link ? $app_data->facebook_link : "javascript:void(0);" ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                        <g>
                          <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="<?= $app_data->linkedin_link ? $app_data->linkedin_link : "javascript:void(0);" ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                        <g>
                          <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                          <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                          <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="<?= $app_data->instagram_link ? $app_data->instagram_link : "javascript:void(0);" ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                        <g>
                          <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                          <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                          <circle cx="18.406" cy="5.594" r="1.44" />
                        </g>
                      </svg>
                    </a>
                  </li>
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
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('blogs'); ?>">Blogs</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/career'); ?>">Career</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link book-btn" href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal">Book Now</a>
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
            <ul class="social-list">
              <li>
                <a href="<?= $app_data->facebook_link ? $app_data->facebook_link : "javascript:void(0);" ?>" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                    <g>
                      <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                    </g>
                  </svg>
                </a>
              </li>
              <li>
                <a href="<?= $app_data->linkedin_link ? $app_data->linkedin_link : "javascript:void(0);" ?>" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background: new 0 0 24 24" xml:space="preserve">
                    <g>
                      <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                      </path>
                      <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                      </path>
                      <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                      </path>
                    </g>
                  </svg>
                </a>
              </li>
              <li>
                <a href="<?= $app_data->instagram_link ? $app_data->instagram_link : "javascript:void(0);" ?>" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                    <g>
                      <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                      <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                      <circle cx="18.406" cy="5.594" r="1.44" />
                    </g>
                  </svg>
                </a>
              </li>
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
                <a href="<?= $base_url . 'blogs'; ?>" class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                    <path d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z" />
                  </svg>
                  <span>Blogs</span>
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
                  <span>Book Now</span>
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
            <p class=" mb-0">&copy; 2023 CritiHome. Al Rights Reseved.</p>
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
                <h2 class="heading text-center">Book CritiHome's Medical Services at Home</h2>
                <p class="para text-center">Please enter your details and we will reach out to you
                  as
                  soon as we can.
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