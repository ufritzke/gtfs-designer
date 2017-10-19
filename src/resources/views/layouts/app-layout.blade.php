<!doctype html>
<html lang="pt-br">
  
  @include('fragments.head')

  <body class="grey lighten-4">

    @include('fragments.nav')

    @yield('page-content')

    @yield('footer-content')

  </body>
</html>
