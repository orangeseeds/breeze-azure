<nav id="searchNav" class="navbar search-nav slider navbar-expand-lg navbar-light bg-light position-fixed top-0 closed no-padding" >
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('landing') }}">
      Breeze
      <x-application-logo/>
    </a>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">naice</span>
    </button> --}}
    <x-nav-search-input/>
    <button type="button" class="btn-close" aria-label="Close" onclick="slideSearchBar()"></button>
  </div>
</nav>
