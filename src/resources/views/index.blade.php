@extends('layouts.app-layout')

@section('page-content')
<div id="map"></div>

<div id="intro" class="row">
  <div class="container">
    <div class="col s12 m4">
      <div class="center">
        <i class="material-icons light-blue-text text-darken-4">group</i>
        <p class="intro-title">Crowdsourcing</p>
        <p class="intro-text center">Cadastre e atualize os feeds GTFS em conjunto com a comunidade a fim de manter os dados sempre atualizados e consistentes.</p>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="center">
        <i class="material-icons light-blue-text text-darken-4">lock_open</i>
        <p class="intro-title">Open Source</p>
        <p class="intro-text center">Código totalmente <a href="https://github.com/alexandrebenevides/gtfs-designer" target="_blank">disponível</a> para os desenvolvedores que queiram implementar nossas funcionalidades ou simplesmente fazer estudo do projeto. <a href="{{ url('/terms') }}">Visualizar termos.</a></p>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="center">
        <i class="material-icons light-blue-text text-darken-4">storage</i>
        <p class="intro-title">Repositório</p>
        <p class="intro-text center">Mantenha os feeds GTFS sempre salvos em segurança com a possibilidade de importação e exportação dos dados.</p>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer-content')
@include('fragments.footer')
@stop
