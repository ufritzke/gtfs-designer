<div class="navbar-fixed">
  <nav class="grey lighten-3">
    <div id="nav-container" class="container">
    <div class="nav-wrapper">
      <div class="col s12">

        <a href="{{ url('/') }}" class="brand-logo">
          <img id="nav-logo" src="{{ asset('img/logo2-gtfs-designer.png') }}" alt="GTFS Designer Logo">
        </a>

        <a href="#" data-activates="menu-mobile" class="button-collapse show-on-small">
          <i class="material-icons light-blue-text text-darken-4">menu</i>
        </a>

        <ul class="right hide-on-med-and-down">
          @include('fragments.nav-itens')
        </ul>

        <ul class="side-nav" id="menu-mobile">
          <li class="grey lighten-4 grey-text text-darken-2 z-depth-1 center">Navegação</li>
          @include('fragments.nav-itens')
        </ul>

      </div>
    </div>
    </div>
  </nav>
</div>