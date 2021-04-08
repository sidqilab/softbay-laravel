  <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo_small.png" alt="SoftBay" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav text-uppercase mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('category') }}">CATEGORY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DESIGNER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>
          </ul>
          <a href="" class="nav-link text-white"
            ><img src="images/icon-cart@2x.png" alt="SoftBay" /></i>My Cart (<span>12</span>)</a
          >
        </div>
      </div>
    </nav>

    <!-- Navbar End -->
