<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <!-- Bootstrap CSS --> 
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >

    <title>www.momplace.com</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap'); 
        @import url('https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700;8..60,800&display=swap'); 
        :root{--blue_color:#316f98; --purple_color:#6a11a8;}
        .container{max-width:1440px;}
        h1,h2,h3,h4,h5,h6,span,div,ul,li,a,b,p,body{padding:0;margin:0;font-family: 'Poppins', sans-serif;transition:0.5s;list-style:none;text-decoration:none;} 
        header, footer, section{width:100%;float:left}
    </style>
  </head>
  <body>
    <style>
      .th_topbar{width:100%;float:left;border:1px solid #ddd;padding: 10px 0;}
      .th_topbar .logo{float:left;width:100%;}
      .th_topbar .logo img{width:120px;} 
      .th_top_menu {width:100%;float:left;display: flex;height: 100%;align-items:center;}
      .th_top_menu li a{float:left;color:#333333;font-weight:600;font-size:16px;margin:0 10px;}
      .th_top_menu li a:hover{color:var(--blue_color);}
      .sign_in{float:left;width:100%;color:var(--blue_color);font-weight:600;font-size:16px;display: flex;height: 100%;align-items:center;}
      .th_topbar form{width:100%;float:left;display:flex;align-items:center;height:100%;}
      .th_topbar form input{width:85%;float:left;border: none;height: 40px;outline: none;padding: 8px 10px;
    font-size: 1rem;box-shadow: 0px 2px 4px 0px #0000001A inset;font-family: var(--font-poppins);
    font-weight: normal;line-height: 1.5rem;letter-spacing: 0.5px;}
    .th_topbar form button{width: 15%;outline:none;border:none;color:#fff;text-align:center;cursor:pointer;
      height: 40px;background: #39768A;}
      .th_topbar form button:hover{background-color:var(--blue_color);}
      .th_menu{width:100%;float:left;    box-shadow: 0 3px 3px -2px rgba(0,0,0,.1);}
         header .navbar-collapse{justify-content:space-between;}
         header .navbar{padding:10px 0;border-bottom:1px solid #E5E8EB;} 
         header .navbar ul li a{font-size:16px;float:left;color:#000;margin-right:30px;text-decoration:none;}
         header .navbar ul li a:hover{color:var(--purple_color);}
         header .navbar ul li ul{background-color:transparent;border-radius:0;padding-top:12px;padding-bottom:0;border:none;
          margin:0}
         header .navbar ul li ul li a{margin:0;color:#202326;padding:10px;background-color:#f5f5f5;}
         header .navbar ul li ul li a:hover{background-color:#e9e9e9}
         header .navbar .th_contact li{display:inline-flex;} 
         header .navbar .th_contact li a{color:var(--purple_color)}
         header .navbar .th_contact li a:hover{color:var(--purple_color);text-decoration:underline;}

        @media only screen and (max-width:1140px){
          header .navbar-brand img{width:150px;}
          header .navbar ul li a{font-size:14px;margin-right:20px;}
        }
         @media only screen and (max-width:992px){
          .navbar-light .navbar-toggler-icon{filter:invert(1);}
          .navbar-toggler:focus{box-shadow:none;}
          header .navbar-nav{margin-top:20px;}
          .dropdown-toggle::after{position:absolute;right:15px;top:20px;}
          header .navbar ul li{border-bottom:1px solid #93999e;}
          header .navbar ul li a{width:100%;float:left;margin:0;padding:10px;background: linear-gradient(270deg, #101C29 19.39%, #304459 103.01%);}
          header .navbar .th_contact{width:100%;float:left;margin:0;padding:10px;background: linear-gradient(270deg, #101C29 19.39%, #304459 103.01%);}
          header .navbar .th_contact li{border-bottom:none;}
          header .navbar ul li ul li a{background:#fff;border-bottom:1px solid #202326} 
          .dropdown-menu[data-bs-popper]{margin-top:-1px}
        }

        
    </style>
    <header>
      <div class="th_topbar">
        <div class="container">
          <div class="row">
            <div class="col-2">
              <a class="logo" href="index.php"><img src="assets/images/logo.jpg" alt="Logo" class="img-fluid"></a>
            </div>
            <div class="col-lg-6 col-9">
              <ul class="th_top_menu">
                <li><a href="#">Assisted Living</a></li>
                <li><a href="#">Memory Care</a></li>
                <li><a href="#">Independent Living</a></li>
                <li><a href="#">Senior Living</a></li>
              </ul>
            </div>
            <div class="col-1">
              <a class="sign_in" href="#">Sign In</a>
            </div>
            <div class="col-3">
              <form>
                <input type="search" name="" placeholder="PB, Lahore">
                <button><i class="bi bi-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
        <div class="th_menu">
          <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand d-block d-lg-none" href="index.php"><img src="assets/images/logo.jpg" alt="Logo" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav">
                            <li class="dropdown">
                              <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Senior Living Awards
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="best-of-senior-living.php">Best of Senior Living</a></li>
                                <li><a class="dropdown-item" href="most-friendly.php">Most Friendly</a></li>
                                <li><a class="dropdown-item" href="best-meals-and-dining.php">Best Meals and Dining</a></li>
                                <li><a class="dropdown-item" href="best-activities.php">Best Activities</a></li>
                                <li><a class="dropdown-item" href="all-star.php">All-Star</a></li>
                              </ul>
                            </li> 
                            <li class="dropdown">
                              <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                How Our Service Works
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="eldercare-advisors.php">How Our Services Work</a></li> 
                                <li><a class="dropdown-item" href="testimonials.php">Testimonials</a></li>
                              </ul>
                            </li>
                            <li><a  href="#">Caregiver Resources</a></li>
                            <li><a  href="#">Our Company</a></li>
                            <li><a  href="#">Add Review</a></li>
                          </ul> 
                          <ul class="th_contact">
                              <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="#6024A2" stroke="#6024A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="m1 21 1.4-4.2c.1-.6.5-1.1 1-1.3l2.8-1c.6-.2 1.2 0 1.6.4l3.2 3.4 3.2-3.4c.4-.4 1-.6 1.6-.4l2.8 1c.5.2.9.7 1 1.3L21 21H1Z"></path><path stroke="#6024A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5.4 5.9C5.1 3.7 7.8 1 11 1c3.2 0 5.8 2.6 5.6 4.9"></path><path stroke="#6024A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.4 7.4c0-2.5-2-4.6-4.4-4.6-2.4 0-4.4 2-4.4 4.6v1.3c0 2.5 2 4.6 4.4 4.6 2.4 0 4.4-2.1 4.4-4.6V7.4Z"></path><path fill="#6024A2" d="M11 11.7a1.1 1.1 0 1 0 0-2.2 1.1 1.1 0 0 0 0 2.2Z"></path><path stroke="#6024A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6.7 9.7c.7.6 3.6 1 4.3.9"></path><path stroke="#6024A2" stroke-miterlimit="10" d="M5.5 10.2h-.1c-.6 0-1.1-.5-1.1-1.1V7c0-.6.5-1.1 1.1-1.1h.1c.6 0 1.1.5 1.1 1.1v2.1c0 .6-.5 1.1-1.1 1.1Z"></path><path fill="#6024A2" stroke="#6024A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M11 2.8c-2.4 0-4.4 2.1-4.4 4.6 0 0 5-.8 5.7-2 1.3.5 2.9 2.4 3.1 3.3V7.4c0-2.6-2-4.6-4.4-4.6Z"></path></svg>+1 (714) 820-9946</a></li> 
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </header>