@extends('layouts.app-layout')

@section('page-content')

@include('fragments.float-background')

<div class="section"></div>
  <main>
    <center>

      <div class="container float-panel">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <i class="material-icons large light-blue-text text-darken-4">person_add</i>
          <h4>Cadastrar sua Conta</h4>

          <form class="col s12" method="POST">
            
            @include('alerts.danger-message')

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class='row'>
              <div class='input-field col s12'>
                <input type='text' name='name' id="name">
                <label for='name'>Nome *</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='email' name='email' id='email'>
                <label for='email'>E-mail *</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='password' name='password' id='password'>
                <label for='password'>Senha *</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='password' name='password_confirm' id='password_confirm' />
                <label for='password_confirm'>Confirmar senha *</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect light-blue darken-4'>Cadastrar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
@stop
