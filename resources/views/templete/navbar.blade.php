<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Halaman {{ $page }} </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/crud">Catatan</a>
          </li>
          <li class="nav-item">
            <form method="get" action="/crud/create">
              <button class="nav-link bg-info rounded" >Create</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>