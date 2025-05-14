      <?php
      session_start();             
      ?>
  

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

        <?php if (isset($_SESSION['user'])): 
          $username = $_SESSION['user'];
          ?>

          <a class="navbar-brand" href="#">Hosgeldin, <?= $username ?> </a>

          <?php else: ?>

            <a class="navbar-brand" href="#">Hosgeldin, Misafir </a>

          <?php endif; ?>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Hakkimda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.php">Ozgecmis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.php">Sehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgi.php">Ilgi Alanlarim</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="iletisim.php">Iletisim</a>
              </li>



              <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item login-link">
                <a class="nav-link" href="logout.php">Cikis Yap</a>
              </li>
          <?php else: ?>
            <li class="nav-item login-link">
                <a class="nav-link" href="login.php">Giris Yap</a>
              </li>
          <?php endif; ?>



            </ul>
          </div>
        </div>
      </nav>