<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATS-Project</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="./source/css/style.css">
  <link rel="stylesheet" href="./source/css/global.css">
  <link rel="stylesheet" href="./source/css/responsive.css">
</head>

<body>
  <header>
    <nav class="nav px-sm-5">
      <span class="text-white fs-3 fs-sm-6">
        <p class="py-0 px-3 m-0"><i class="bi bi-code-slash m-2"></i>MipalSch</p>
      </span>
    </nav>
  </header>

  <main>
    <div class="wadah">
      <aside class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar">
          <div class="title">
            <i class="bi bi-briefcase-fill me-3"></i>Project ATS
          </div>
          <ul class="list-items">
            <li><a href="index.php?page=dashboard"><i class="bi bi-house-fill"></i>Dashboard</a></li>
            <li><a href="index.php?page=kelipatan5"><i class="bi bi-5-circle"></i>Kelipatan 5</a></li>
            <div class="icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </ul>
        </nav>
      </aside>

      <div class="columns">
        <div class="content">
          <?php
          if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
              case 'kelipatan5':
                include "./public/1-kelipatan5.php";
                break;
              case 'dashboard':
                include "./public/dashboard.html";
                break;
              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          } else {
            include "./public/dashboard.html";
           
          }
          ?>
        </div>
        <footer class="fs-6 m-0">
          Copyright©2023 All rights reserved | Made By <span>Muhammad Ipal</span>
        </footer>
      </div>
    </div>
  </main>
  <script>
    const btn = document.getElementById('btn');
    const wrapper = document.querySelector('.wrapper');

    btn.addEventListener('change', function() {
      if (this.checked) {
        wrapper.classList.add('hidden');
      } else {
        wrapper.classList.remove('hidden');
      }
    });
  </script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>