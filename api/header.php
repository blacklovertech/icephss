<?php ?>
<html>

<head>
  <style>
    .gm-err-container {
      height: 100%;
      width: 100%;
      display: table;
      background-color: #e8eaed;
      position: relative;
      left: 0;
      top: 0;
    }

    .gm-err-content {
      border-radius: 1px;
      padding-top: 0;
      padding-left: 10%;
      padding-right: 10%;
      position: static;
      vertical-align: middle;
      display: table-cell;
    }

    .gm-err-content a {
      color: #3c4043;
    }

    .gm-err-icon {
      text-align: center;
    }

    .gm-err-title {
      margin: 5px;
      margin-bottom: 20px;
      color: #3c4043;
      font-family: Roboto, Arial, sans-serif;
      text-align: center;
      font-size: 24px;
    }

    .gm-err-message {
      margin: 5px;
      color: #3c4043;
      font-family: Roboto, Arial, sans-serif;
      text-align: center;
      font-size: 12px;
    }

    .gm-err-autocomplete {
      padding-left: 20px;
      background-repeat: no-repeat;
      -webkit-background-size: 15px 15px;
      background-size: 15px 15px;
    }

    .gm-style-moc {
      background-color: rgba(0, 0, 0, 0.45);
      pointer-events: none;
      text-align: center;
      -webkit-transition: opacity ease-in-out;
      transition: opacity ease-in-out;
    }

    .gm-style-mot {
      color: white;
      font-family: Roboto, Arial, sans-serif;
      font-size: 22px;
      margin: 0;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
    }

    sentinel {}

    .gm-style img {
      max-width: none;
    }

    .gm-style {
      font: 400 11px Roboto, Arial, sans-serif;
      text-decoration: none;
    }

    .footer_widget p {
      text-align: justify;
    }
    
        .footer_widget p {
            text-align: justify;
        }

        /* Pure Black Theme */
        .footer {
            background-color: #000000;
            color: #fff;
        }

        .footer h4,
        .footer h4 {
            color: #fff;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer .thrust-area {
            margin-bottom: 30px;
        }

        .footer .card {
            background-color: #333333;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .footer .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .footer .card h4 {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 10px;
            text-align: left;
        }

        .footer .card ul {
            padding-left: 20px;
            color: #ddd;
            text-align: left;
        }

        .footer .card ul li {
            margin-bottom: 5px;
        }

        .footer .card a {
            color: #1e90ff;
            text-decoration: none;
        }

        .footer .card a:hover {
            text-decoration: underline;
        }

        /* Grid system for cards */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Responsive design for better visibility */
        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }
        #countdown {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px; /* Space between the timer blocks */
}

#countdown > div {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#countdown .font-bold {
  font-size: 2rem; /* Adjust font size as needed */
  color: white; /* Ensure the text is visible */
}

  </style>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>ICEPHSS’25</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/gijgo.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/slicknav.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/common.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/util.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/map.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/onion.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- header-start -->
  <header>
    <div class="header-area">
      <div id="sticky-header" class="main-header-area">
        <div class="container">
          <div class="header_bottom_border">
            <div class="row align-items-center">
              <div class="col-xl-1 col-lg-1">
                <div class="logo">
                  <a href="home.php">
                    <h3
                      style="font-family: 'Monoton', cursive; font-size: 40px; text-transform: uppercase; font-weight: 400; color: #fff; line-height: 1; margin-top: 50px; margin-bottom: 40px;">
                      ICEPHSS’25
                    </h3>

                  </a>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9">
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="index.php">Home</a></li>
                      <li>
                        <a href="#">About <i class="faa-angle-down"></i></a>
                        <ul class="submenu">
                          <li><a href="about.php">About</a></li>
                          <li><a href="thrustareas.php">Thrust areas </a></li>
                          <li><a href="editorialboard.php">Editorial Board</a></li>
                          <li><a href="contact.php">Contact</a></li>

                        </ul>
                      </li>
                      <li><a href="speaker.php">Speakers</a></li>
                      <li><a href="news.php">News</a></li>
                      <li><a href="author.php">Authors</a></li>
                      <li><a href="calendar.php">Calander</a></li>
                      <li><a href="callforpaper.php">Submit Paper</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
             

              <!-- Mobile Menu Button -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none">

                  <nav class="mobile-nav" style="display: none;">
                    <ul id="mobile-navigation">
                      <li><a href="index.php">Home</a></li>
                      <li>
                        <a href="#">About <i class="faa-angle-down"></i></a>
                        <ul class="submenu">
                          <li><a href="about.php">About</a></li>
                          <li><a href="thrustareas.php">Thrust areas</a></li>
                          <li><a href="venue.php">Venue</a></li>
                        </ul>
                      </li>
                      <li><a href="speaker.php">Speakers</a></li>
                      <li><a href="author.php">Authors</a></li>
                      <li><a href="news.php">News</a></li>
                      <li><a href="calendar.php">Calander</a></li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- Add the following JavaScript for mobile menu toggle -->
  <script>
    // Toggle the mobile menu
    document.querySelector('.mobile-menu-toggle').addEventListener('click', function () {
      var mobileNav = document.querySelector('.mobile-nav');
      mobileNav.style.display = mobileNav.style.display === 'block' ? 'none' : 'block';
    });
  </script>
  