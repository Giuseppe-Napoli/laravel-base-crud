<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link @if ( Request::route()->getName() === 'home') active @endif" aria-current="page" href="{{route('home')}}">Home</a>
              <a class="nav-link @if ( Request::route()->getName() === 'fumettos.index') active @endif" href="{{route('fumettos.index')}}">Prodotti</a>
              <a class="nav-link @if ( Request::route()->getName() === 'fumettos.create') active @endif" href="{{route('fumettos.create')}}">Nuovo Fumetto</a>
              <a class="nav-link @if ( Request::route()->getName() === 'contact') active @endif" href="{{route('contact')}}">Contatti</a>
            </div>
          </div>
        </div>
      </nav>
</header>
