    <!--Start Header  -->
    <header class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#Home"
          ><img src="{{asset('web_files')}}/images/logoc.png" width="100" alt=""
        /></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link Home active" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Stores" href="#Stores">Stores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Articles" href="#Articles">Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Contact" href="#Contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link About" href="#About">About</a>
            </li>
          </ul>
        </div>
        <div class="menu-wrap p-0" dir="rtl">
          <svg
            class="ham hamRotate ham8"
            viewBox="0 0 100 100"
            onclick="this.classList.toggle('active')"
            width="20%"
          >
            <path
              class="line top"
              d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"
            />
            <path class="line middle" d="m 30,50 h 40" />
            <path
              class="line bottom"
              d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"
            />
          </svg>

          <div class="menu">
            <div>
              <div>
                <ul class="m-0 d-block d-lg-none">
                  <li><a href="#Home" data-text="Home">Home</a></li>
                  <li><a href="#Stores" data-text="Stores">Stores</a></li>
                  <li><a href="#Articles" data-text="Articles">Articles</a></li>
                  <li><a href="#Contact" data-text="Contact">Contact</a></li>
                  <li><a href="#About" data-text="About">About</a></li>
                </ul>
                <ul>
                  <li><a href="{{url('auth#login')}}" data-text="Login">Login</a></li>
                  <li><a href="{{url('auth#register')}}" data-text="Register">Register</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header -->
