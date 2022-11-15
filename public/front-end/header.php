<?php
require_once 'E:/xampp/htdocs/playandchill.net/resources/views/index.php';

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light main-color">
  <div class="container-fluid">
    <a class="navbar-brand d-flex flex-wrap justify-content-lg-start" href="#"><img src="./img/logo-header2.jpg" alt="logo" style="width: 100%; height: 40px" class="img-fluid d-flex justify-content-center"></a>
    <button class="navbar-toggler nav-list-iconnn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">

<div class="mx-10">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
          <a href="#" class="main-font nav-link active nav-item dropdown px-3 text-white text-uppercase mb-0 h5 nav-item dropdown">thể loại</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link  main-font nav-item dropdown px-3 text-white text-uppercase mb-0 h5 nav-item dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            quốc gia
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link main-font nav-item dropdown px-3 text-white text-uppercase mb-0 h5 nav-item dropdown">phim lẻ</a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link main-font nav-item dropdown px-3 text-white text-uppercase mb-0 h5 nav-item dropdown">phim bộ</a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link main-font nav-item dropdown px-3 text-white text-uppercase mb-0 h5 nav-item dropdown">phim mới</a>
        </li>
      </ul>
    </div>
    <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    <div class="text-end">
      <button type="button" class="btn btn-outline-light me-2 nav-item dropdown">Đăng nhập</button>
      <button type="button" class="btn sign-up-btn nav-item dropdown">Đăng ký</button>
    </div>
    </div>
  </div>
</nav>