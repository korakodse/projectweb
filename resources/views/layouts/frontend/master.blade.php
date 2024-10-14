<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Reporter - HTML Blog Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- theme meta -->
  <meta name="theme-name" content="reporter" />

    @include('layouts.frontend.css')
</head>

<body>

<header class="navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <a class="navbar-brand order-1 py-0" href="index.html">
        <img loading="prelaod" decoding="async" class="img-fluid" src="asset/frontend/images/logo.png" alt="Reporter Hugo">
      </a>
      <div class="navbar-actions order-3 ml-0 ml-md-4">
        <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
          data-target="#navigation"> <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
        <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
          <li class="nav-item"> <a class="nav-link" href="about.html">About Me</a>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Articles
            </a>
            <div class="dropdown-menu"> <a class="dropdown-item" href="travel.html">Travel</a>
              <a class="dropdown-item" href="travel.html">Lifestyle</a>
              <a class="dropdown-item" href="travel.html">Cruises</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('login')}}">Log In</a>
            <a class="dropdown-item" href="{{route('register')}}">Register</a>
            </div>
        </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<main>
  <section class="section">
    <div class="container">
      <div class="row no-gutters-lg">
        <div class="col-12">
          <h2 class="section-title">Latest Articles</h2>
        </div>

        @yield('content')

      </div>
    </div>
  </section>
</main>

    @include('layouts.frontend.footer')


    @include('layouts.frontend.js')

</body>
</html>
