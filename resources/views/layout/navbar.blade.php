<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">{{$title}}</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quản lý sinh viên
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Danh sách sinh viên</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Thêm sinh viên</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quản lý lớp
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Danh sách lớp</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Thêm lớp học</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quản lý khóa học
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/khoahoc">Danh sách khóa học</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/khoahoc/add">Thêm khóa học</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <select class="form-select" aria-label="Default select example">
            <option selected>Kiểu tìm kiếm</option>
            <option value="id">ID</option>
            <option value="name">Name</option>
          </select>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>