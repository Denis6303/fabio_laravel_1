<header class="header-section header-section--style2">
  <div class="header-bottom">
    <div class="container">
      <div class="header-wrapper">
        <div class="logo">
          <a href="index-2.html">
            <img class="dark" src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
          </a>
        </div>
        <div class="menu-area">
          <ul class="menu menu--style1">

            <li class="megamenu">
              <a href="#">Accueil </a>
            </li>

            <li class="megamenu">
              <a href="{{ route('matchs') }}">Matchs </a>
            </li>

            <!-- <li>
              <a href="#">Services</a>
              <ul class="submenu">
                <li><a href="services.html">Services</a></li>
                <li><a href="service-details.html">Services Details</a></li>
              </ul>
            </li> -->
            <li>
              <a href="{{ route('about') }}">A propos</a>
              <!-- <ul class="submenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="price.html">Price</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="team-2.html">Team 2</a></li>
                <li><a href="team-details.html">Team Details</a></li>
              </ul> -->
            </li>

            <!-- <li>
              <a href="#">Pages</a>
              <ul class="submenu">
                <li><a href="blogs.html">Blogs</a></li>
                <li><a href="blog-sidebar.html">Blog - Side Bar</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="signup-2.html">Sign Up 2</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="signin-2.html">Sign In 2</a></li>
                <li><a href="forgot-pass.html">Reset Password</a></li>
                <li><a href="forgot-pass-2.html">Reset Password 2</a></li>
                <li><a href="404.html">404 Error</a></li>
              </ul>

            </li> -->
            <li>
              <a href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>

        </div>
        <div class="header-action">
          <div class="menu-area">
            <div class="header-btn">
              <a href="signup.html" class="trk-btn trk-btn--border trk-btn--primary">
                <span>Joindre</span>
              </a>
            </div>

            <!-- toggle icons -->
            <div class="header-bar d-lg-none header-bar--style1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>