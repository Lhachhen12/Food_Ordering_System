<header class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm">
  <div class="container-fluid px-3 px-md-4">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="img/Logo.png" alt="St Lawrence LOGO" width="70" class="me-2">
    </a>
    <div class="d-flex align-items-center order-md-last">
      <?php if (!isset($_SESSION['cid'])) { ?>
        <div class="d-none d-md-block">
          <a href="cust_regist.php" class="btn btn-outline-secondary btn-sm me-2 px-3 rounded-pill">Sign Up</a>
          <a href="cust_login.php" class="btn btn-success btn-sm px-3 rounded-pill">Log In</a>
        </div>
      <?php } else { ?>
        <a href="cust_cart.php" class="btn btn-light position-relative me-2 me-md-3 p-2" type="button">
          <i class="bi bi-cart fs-5"></i> 
          <?php
          $incart_query = "SELECT SUM(ct_amount) AS incart_amt FROM cart WHERE c_id={$_SESSION['cid']}";
          $incart_result = $mysqli->query($incart_query)->fetch_array();
          $incart_amt = $incart_result["incart_amt"];
          if ($incart_amt > 0) { ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
              <?php echo $incart_amt; ?>
            </span>
          <?php } else { ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0</span>
          <?php } ?>
        </a>
        <div class="d-none d-md-block dropdown me-2">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle rounded-pill p-2 bg-light hover-bg-gray-200" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
  <span class="me-2 text-truncate fw-medium" style="max-width: 120px;">
    <span class="text-primary">👋 Hi,</span> <?= htmlspecialchars($_SESSION['firstname']) ?>
  </span>
  <i class="bi bi-person-circle fs-5 text-muted"></i>
</a>
          <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="cust_profile.php">My Profile</a></li>
            <li><a class="dropdown-item" href="cust_order_history.php">Order History</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="logout.php">Log Out</a></li>
          </ul>
        </div>
      <?php } ?>
      <button class="navbar-toggler border-0 ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse mt-2 mt-md-0" id="navbarCollapse">
      <ul class="navbar-nav mx-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link px-3 py-2 text-center fw-medium" aria-current="page" href="index.php">
            <i class="bi bi-house-door d-block d-md-none mx-auto mb-1 fs-4"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 py-2 text-center fw-medium" href="shop_list.php">
            <i class="bi bi-shop d-block d-md-none mx-auto mb-1 fs-4"></i>
            <span>Shop List</span>
          </a>
        </li>
        <?php if (isset($_SESSION['cid'])) { ?>
          <li class="nav-item d-block d-md-none">
            <a href="cust_order_history.php" class="nav-link px-3 py-2 text-center fw-medium">
              <i class="bi bi-clock-history d-block mx-auto mb-1 fs-4"></i>
              <span>Order History</span>
            </a>
          </li>
        <?php } ?>
      </ul>
      <?php if (!isset($_SESSION['cid'])) { ?>
        <div class="d-block d-md-none mt-3 mb-2">
          <div class="d-grid gap-2">
            <a href="cust_regist.php" class="btn btn-outline-secondary rounded-pill">Sign Up</a>
            <a href="cust_login.php" class="btn btn-success rounded-pill">Log In</a>
          </div>
        </div>
      <?php } else { ?>
        <div class="d-block d-md-none">
          <div class="d-flex align-items-center border-top pt-3 mt-3">
            <div class="ms-2 w-100">
              <div class="fw-medium">👋<?= $_SESSION['firstname'] ?></div>
              <div class="d-grid gap-2 mt-2">
                <a href="cust_profile.php" class="btn btn-sm btn-light text-start">
                  <i class="bi bi-person-circle me-2"></i>My Profile
                </a>
                <a href="logout.php" class="btn btn-sm btn-outline-danger text-start">
                  <i class="bi bi-box-arrow-right me-2"></i>Log Out
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</header>