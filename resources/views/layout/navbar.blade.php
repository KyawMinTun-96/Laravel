<nav class="navbar navbar-expand-lg bgColor">
  <div class="container">
    <a class="navbar-brand ftColor bs-navbar-brand" href="{{url('/')}}"><i class="fas fa-home"></i>Shopkeeper</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item bs-nav-item">
            <a class="nav-link ftColor bs-nav-link" href="#"><i class="far fa-list-alt"></i>Category</a>
        </li>
        <li class="nav-item bs-nav-item">
            <a class="nav-link ftColor bs-nav-link" href="#"><i class="fas fa-tshirt"></i>Brand</a>
        </li>
        <li class="nav-item bs-nav-item">
            <a class="nav-link ftColor bs-nav-link" href="{{url('products/carts')}}">
              <i class="fas fa-cart-arrow-down position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  @if(session('items')) 
                      {{count(session('items'))}}
                      +
                  @else
                    0
                  @endif
                    
                </span>
              </i>Cart
            </a>
        </li>
        <li class="nav-item dropdown account bs-nav-item">
            <a class="nav-link dropdown-toggle ftColor bs-nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
            <ul class="dropdown-menu bs-dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{url('products/create')}}">Create</a></li>
              <li><a class="dropdown-item" href="#">View All Products</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
          </li>
        <li class="nav-item dropdown account bs-nav-item">
            <a class="nav-link dropdown-toggle ftColor bs-nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i></a>
            <ul class="dropdown-menu bs-dropdown-menu" aria-labelledby="navbarDropdown">
              @if(Auth::check()) 
                <li><a class="dropdown-item" href="#">Logout</a></li>
                @else
                  <li><a class="dropdown-item" href="{{url('user/login')}}">Login</a></li>
                  <li><a class="dropdown-item" href="{{url('user/register')}}">register</a></li>
              @endif

            </ul>
          </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>