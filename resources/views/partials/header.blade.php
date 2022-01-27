<header class="px-5">
    <nav class="navbar navbar-expand-lg navbar-dark>
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="LOGO DC">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.create') }}">Add Comic</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>