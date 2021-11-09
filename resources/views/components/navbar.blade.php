<nav id="regularNav" class="navbar regular-nav navbar-expand-lg navbar-light bg-light position-fixed top-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('landing') }}">
      <x-application-logo/>
      Breeze
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <x-responsive-nav-link/>
  </div>
</nav>
