<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><b>MovieList</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "movie" ? "active" : "" }}" href="/">Movie</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ $title === "pinocchio" ? "active" : "" }}" href="/pinocchio">Pinocchio</a>
          </li> --}}
        </ul>
        <ul class="navbar-nav ms-auto">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
        </ul>       
      </div>
    </div>
  </nav>