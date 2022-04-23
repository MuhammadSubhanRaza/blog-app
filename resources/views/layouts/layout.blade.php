
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog App</title>
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
</head>
<body>
    

    <header id="header">
        <div class="container box_1170 main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index-2.html"><img src="img/xlogo.png.pagespeed.ic._PMd-UbqpC.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="index-2.html">Home</a></li>
                <li><a href="category.html">Category</a></li>
                <li class="menu-has-children"><a href="#">Pages</a>
                  <ul>
                    <li><a href="elements.html">Elements</a></li>
                  </ul>
                </li>
                <li class="menu-has-children"><a href="#">Blog</a>
                  <ul>
                    <li><a href="{{Route("addpost")}}">Add New Post</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="{{Route("login")}}">Login</a></li>
                <li><a href="{{Route("register")}}">Register</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>



      @yield('main-content')

    
    
    
      <footer class="footer-area section-gap">
        <div class="container box_1170">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6 class="footer_title">About Us</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  dolore
                  magna aliqua.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6 class="footer_title">Newsletter</h6>
                <p>Stay updated with our latest trends</p>
                <div id="mc_embed_signup">
                  <form target="_blank"
                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                    class="subscribe_form relative">
                    <div class="input-group d-flex flex-row">
                      <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Email Address '" required type="email">
                      <button class="btn sub-btn"><span class="fa fa-envelope"></span></button>
                    </div>
                    <div class="mt-10 info"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-footer-widget instafeed">
                <h6 class="footer_title">Instagram Feed</h6>
                <ul class="list instafeed d-flex flex-wrap">
                  <li><img src="img/i1.jpg" alt=""></li>
                  <li><img src="img/i2.jpg" alt=""></li>
                  <li><img src="img/xi3.jpg.pagespeed.ic.L94JrnmM3_.jpg" alt=""></li>
                  <li><img src="img/xi4.jpg.pagespeed.ic.n0FsoUvsgv.jpg" alt=""></li>
                  <li><img src="img/i5.jpg" alt=""></li>
                  <li><img src="img/xi6.jpg.pagespeed.ic.E0ZLUCb6rd.jpg" alt=""></li>
                  <li><img src="img/xi7.jpg.pagespeed.ic.OJ-Gv3MVw4.jpg" alt=""></li>
                  <li><img src="img/xi8.jpg.pagespeed.ic.DeggY3S6fr.jpg" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="single-footer-widget f_social_wd">
                <h6 class="footer_title">Follow Us</h6>
                <p>Let us be social</p>
                <div class="f_social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-12 footer-text text-center">
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                target="_blank">Colorlib</a>
            </p>
          </div>
        </div>
      </footer>


     



      {{-- ------------------ SCRIPT SECTION ------------------ --}}


      <script src="{{asset("js/jquery-2.2.4.min.js")}}"></script>
  <script src="{{asset("js/popper.min.js")}}"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script>eval(mod_pagespeed_XGT8k32$Np);</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script>eval(mod_pagespeed_9Rw6MVc4Zn);</script>
  <script>eval(mod_pagespeed_CvWoo5Oxrk);</script>
  <script>eval(mod_pagespeed_tgWKqVPkL4);</script>
  <script>eval(mod_pagespeed_kQtzTGxbhe);</script>
  <script>eval(mod_pagespeed_xcBcpuGrh7);</script>
  <script src="{{asset("js/owlcasrousel.js")}}"></script>
  <script>eval(mod_pagespeed_teAbvIIDKj);</script>
  <script>eval(mod_pagespeed_BhGfdfWE$A);</script> 
  <script>eval(mod_pagespeed_ohFJZOtKUS);</script>
  <script>eval(mod_pagespeed_8VCnk6M5KB);</script>
  <script>eval(mod_pagespeed_NU5ga6j70y);</script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"6fe51d1d69ef4c1f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
</body>
</html>



