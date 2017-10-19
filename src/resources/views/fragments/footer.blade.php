<footer class="page-footer light-blue darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">GTFS Designer</h5>
        <p class="grey-text text-lighten-4">GTFS Designer é um projeto open source baseado em crowdsourcing para facilitar a criação, importação e exportação de um arquivo no padrão General Transit Feed Specification.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Navegação</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ url('/') }}">Início</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/about') }}">Sobre</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/terms') }}">Termos</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/forum') }}">Fórum</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/contact') }}">Contado</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/export') }}">Exportação</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © {{ date('Y') }} Todos os direitos reservados.
      <a class="grey-text text-lighten-4 right" href="mailto:alex.benevides@hotmail.com" target="_blank">Desenvolvido por Alexandre B.</a>
    </div>
  </div>
</footer>