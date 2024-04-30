<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
        </li>

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        @endguest

        @auth
        <li>
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="dropdown-item" type="submit">Logout</button>
          </form>
        </li>
        @endauth


      </ul>
    </div>
  </div>
</nav>