<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" class="href">
    <title>@yield('page')</title>
</head>
<body class="bg-light">
    <div class="container text-white d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom mt-3">
        <a href="/" class="d-flex align-items-center  text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"></svg>
          <span class="fs-4 text-dark">Max Store</span>
        </a>
  
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2 text-dark text-decoration-none btn btn-warning" href="/">Home</a>
          <a class="me-3 py-2 text-dark text-decoration-none" href="/about">About</a>
          <a class="me-3 py-2 text-dark text-decoration-none" href="/contacts">Contacts</a>
          <a class="me-3 py-2 text-dark text-decoration-none" href="/review">Review</a>
          <a class="py-2 text-dark text-decoration-none" href="/login">Register</a>
        </nav>
      </div>
<div class="container">
    @yield('main-content')
</div>

</body>
</html>