<header class="navbar sticky-top navbar-expand-lg  bg-black">
        <div class="container-fluid" id="top-bar">
          <a class="navbar-brand" id="mg" href="../index.php">
            <img src="../Images/Primary/logo.png" alt="Brand Logo">
          </a>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link d-inline  icons" href="#">
                 <i class="fa-solid fa-magnifying-glass fa-xl visible" id="Search-normal"  ></i> 
                  <div id="Search-expanded" class="invisible">
                  <form class="d-inline"action="search_product.php">
                  <input type="text" class="searchText"  placeholder="Search something" name="search_data">
                  <button  type="submit" value="search"  name="search_data_product" class="Search-bt btn btn-dark p-1 invisible" ><i  class=" fa-solid fa-arrow-right fa-xl invisible"></i></button>
                  </form>
                  </div>
                </a>
                
        
              </li>
              <li class="nav-item dropdown">
              <?php
              @session_start();
                if(!isset($_SESSION['email'])){
                  echo "
              <a class='nav-link dropdown-toggle icons  d-inline' href='#' role='button' id='userIcon' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='fa-regular fa-user fa-xl'></i>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='../users_area/user_login.php'>Login</a></li>
            <li><a class='dropdown-item' href='../users_area/user_register.php'>Register</a></li>
          </ul>
                <!-- <a class='nav-link icons  d-inline ' href='#'id='userIcon'>
                 <i class='fa-regular fa-user fa-xl'></i>
                </a> -->
              </li>";
                }else{
                  echo "
                  <a class='nav-link dropdown-toggle icons  d-inline' href='#' role='button' id='userIcon' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='fa-regular fa-user fa-xl'></i>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='../users_area/profile.php'>My account</a></li>
            <li><a class='dropdown-item text-danger' href='logout.php'>Logout</a></li>
          </ul>
                <!-- <a class='nav-link icons  d-inline ' href='#' id='userIcon'>
                 <i class='fa-regular fa-user fa-xl'></i>
                </a> -->
              </li>";
                }
              ?>
              <li class="nav-item">
                <a class='nav-link icons  d-inline ' href='cart.php' target='_blank'>
                  <i class="fa-solid fa-bag-shopping fa-xl"> <span class="badge badge-light"><?php cart_items(); ?></span></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </header>
    <!-- <div id="signup-popup" class="signUpPopup d-none ">
      <button class="close-btn float-end"><i class="fa-solid fa-xmark fa-xl"></i></button>
      <h1 class="text-center m-3 form-heading">Welcome to <span class="fw-medium">ArtWisp</span></h1>
      <form action="#" class="d-block text-center form-label ">
        <input type="text" placeholder="Name">
        <br>
        <input type="email" placeholder="Email">
        <br>
        <input type="password" placeholder="Password">
        <br>
        <button class="form-btn" type="submit">Register</button>
        <div class="container_or">
          <hr>
          <p>OR</p>
          <hr>
        </div>
        <button class="d-block social-login"><i class="fa-brands fa-google fa-xl m-2"></i>Log in with Google</button>
        <button class="d-block social-login"><i class="fa-brands fa-meta fa-xl m-2"></i>Log in with Facebook</button>
        <p id="bottom-form-text">Already have an account? <a class="text-decoration-none fw-bold" href="#">Log in</a></p>
      </form>

    </div> -->
    <div class="container" id="navigation">
        <ul class="nav justify-content-center ">
            <li class="nav-item">
                <a href="originals.php" class="nav-link">Originals</a>
            </li>
            <li class="nav-item">
                <a href="prints.php" class="nav-link">Prints</a>
            </li>
            <li class="nav-item">
                <a href="Digitals.php" class="nav-link">Digitals</a>
            </li>
            <li class="nav-item">
                <a href="Sculpture.php" class="nav-link">Sculpture</a>
            </li>
        </ul>
    </div>