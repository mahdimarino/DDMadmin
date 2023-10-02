<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-dark">
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a href="/" class="navbar-brand">Navbar</a>
      
      @auth
          
      
     
      <li><a href="/home">manage listings</a></li>
      <li><a href="/listing/create">create</a></li>
      
        
        <li class="text-light">welcom {{auth()->user()->name}}</li>
        <form method="post" action="/logout">
          @csrf
        <button type="submit">lougout</button>
      </form>
      @else
      <li><a href="/register">register</a></li>
      <li><a href="/login">login</a></li>

      @endauth
      <form action="/" class="d-flex" role="search">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
      
      <div class="row">
        <div style="height: 100vh" class="col-xl-2 bg-dark text-light">hello</div>
       <x-flashmessage /> <div class="col-xl-10 bg-light">@yield('content')</div>
      </div>
    
    
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>