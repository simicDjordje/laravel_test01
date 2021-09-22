<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @auth
          <a class="nav-link" href="{{route('home')}}">Home</a>
          <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
          <a class="nav-link" href="{{route('posts')}}">Posts</a>
          <a class="nav-link" href="#">{{auth()->user()->name}}</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item bg-light" style="border: none;">Logout</button>
                </form>
            </li>
          </ul>
        </li>
        @endauth

        @guest
          <a class="nav-link" href="{{route('home')}}">Home</a>
          <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
          <a class="nav-link" href="{{route('login')}}">Login</a>
          <a class="nav-link" href="{{route('register')}}">Register</a>
        @endguest
      </div>
    </div>
  </div>
</nav>
