@php
$posts = $posts;
$categories = $categories;
$posts=$posts->where('cat_id',$id);

@endphp
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NEWS Time</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ asset('./assets1/vendors/mdi/css/materialdesignicons.min.css')}}"
    />
    <link rel="stylesheet" href="{{ asset('assets1/vendors/aos/dist/aos.css/aos.css')}}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('assets1/images/favicon.png')}}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css')}}">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sign in</a>
                    </li>
                  </ul>
                    <div class="box">
                        <form name="search">
                            <input type="text" class="input" name="txt" 
                            onmouseout="document.search.txt. = 'Search'">
                        </form>
                            <i class="fas fa-search"></i>
                    </div>

                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="{{ asset('assets1/images/logo.svg')}}" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('index' )}}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/magazine.html">MAGAZINE</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/business.html">Business</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/sports.html">Sports</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/art.html">Art</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/politics.html">POLITICS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/travel.html">Travel</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="pages/contactus.html">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
       

        
                <!-- partial -->
    
            <h1 style="text-align: center">news in "{{ $categories->find($id)->title }}"</h1>
        
                
                <div class="content-wrapper">
                  <div class="container">
                  <div class="row aos-init aos-animate" data-aos="fade-up">
                    <div class="row" data-aos="fade-up">
                      
                      <div class="col-xl-4 stretch-card grid-margin">
                        <div class="card bg-dark text-white">
                          <div class="card-body">
                           
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <div class="row" data-aos="fade-up">
                      <div class="col-lg-3 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <h2>Category</h2>
                            <ul class="vertical-menu">
                              @foreach ( $categories as $category)
                              <li><a href="{{  route('SinglCategory',$category->id ) }}">{{ $category->title }}</a></li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-9 stretch-card grid-margin">
                        <div class="card">
                          <div class="card-body">
        @foreach ($posts as $post)
          @if ($loop->iteration<5)
          @php
          $id=$post->id;
        @endphp
          <ul class="vertical-menu">
               
            <li><a  href="{{ route('SinglPost', $id )}}">
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      <img
                      src="{{ asset('PostImge/'.$post->imge) }}"
                        alt="thumb"
                        class="img-fluid"
                      />
                    </div>
                    <div class="badge-positioned">
                      <span class="badge badge-danger font-weight-bold"
                        >Flash news</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin">
                  <h2 class="mb-2 font-weight-600">
                    {{ $post->title}}
                  </h2>
                  <div class="fs-13 mb-2">
                    <span class="mr-2">Photo </span>10 Minutes ago
                  </div>
                  <p class="mb-0">
                    {{ $post->description}}
                  </p>
                </div>
              </div>
            </a></li>
        
          </ul>
        
         
          @endif
        @endforeach
        
 
        
                        </div>
                      </div>
                    </div>
              
                
            <!-- inject:js -->
            <script src="{{ asset('assets1/vendors/js/vendor.bundle.base.js')}}"></script>
            <!-- endinject -->
            <!-- plugin js for this page -->
            <script src="{{ asset('assets1/vendors/aos/dist/aos.js/aos.js')}}"></script>
            <!-- End plugin js for this page -->
            <!-- Custom js for this page-->
            <script src="{{ asset('./assets1/js/demo.js')}}"></script>
            <script src="{{ asset('./assets1/js/jquery.easeScroll.js.')}}"></script>
            <!-- End custom js for this page-->
          </body>
        </html>