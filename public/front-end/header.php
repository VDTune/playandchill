
<?php
    require_once 'E:/xampp/htdocs/playandchill.net/resources/views/index.php';
    
?>


<header class="p-3 bg-dark text-white main-color ">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-inline-flex align-items-center text-decoration-none" >
          <img src="./img/logo.jpg"  alt="logo" style="width: 100%; height: 50px" class="img-fluid d-flex justify-content-center">
        </a>

        <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0" style="margin: 0 3% 0 2%;">
          <li><a href="#" class="nav-link px-3 text-dark text-uppercase mb-0 h5">thể loại</a></li>
          <li><a href="#" class="nav-link px-3 text-white text-uppercase mb-0 h5">quốc gia</a></li>
          <li><a href="#" class="nav-link px-3 text-white text-uppercase mb-0 h5">phim lẻ</a></li>
          <li><a href="#" class="nav-link px-3 text-white text-uppercase mb-0 h5">phim bộ</a></li>
          <li><a href="#" class="nav-link px-3 text-white text-uppercase mb-0 h5">phim mới</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Đăng nhập</button>
          <button type="button" class="btn sign-up-btn">Đăng ký</button>
        </div>
      </div>
    </div>
  </header>