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
        <li class="nav-item">
          <a class="nav-link" href="{{route('becomeLessor')}}">Diventa un locatore</a>
        </li>

        @if (Auth::user()->is_lessor)
        <li class="nav-item">
          <a class="nav-link" href="{{route('announcements.create')}}">Inserisci un nuovo annuncio</a>
        </li>
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            @if (Auth::user()->is_admin)
            <li><a class="nav-link" href="{{route('dashboard')}}">Amministrazione</a></li>
            @endif

            <li>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
              </form>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>