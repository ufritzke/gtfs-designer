@extends('layouts.app-layout')

@section('page-content')

@include('fragments.float-background')

<div class="section"></div>
  <main>
    <center>

      <div class="container float-panel">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <i class="material-icons large light-blue-text text-darken-4">person</i>
          <h4>Acesse sua Conta</h4>

          <form class="col s12" method="POST" action="{{ url('/login/auth') }}">
            
            @include('alerts.danger-message')

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class='row'>
              <div class='input-field col s12'>
                <input type='email' name='user_email' id='user_email'>
                <label for='user_email'>E-mail *</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='password' name='user_password' id='user_password' />
                <label for='user_password'>Senha *</label>
              </div>
              <div class="container col s12">
                <label class="left">
                  <a class='orange-text text-lighten-1' href="{{ url('/user/create') }}"><b>Cadastrar</b></a>
                </label>
                <label class="right">
                  <a class='orange-text text-lighten-1' href="{{ url('/recover/create') }}"><b>Esqueceu sua senha?</b></a>
                </label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect light-blue darken-4'>Login</button>
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
