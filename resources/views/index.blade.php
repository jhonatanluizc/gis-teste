@extends('layouts.base')
@section('title', 'Tela De Login')
@section('css')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<script src="{{ asset('js/index.js') }}"></script>
@stop
    @section('content')
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Sistema de Cadastro de Consulta de uma Clinica Odontológica</h3>
                <div class="card-text">
                    @if( Session::has( 'warning' ))
                        <h6 class="card-title text-center" style="color:red">{{ Session::get( 'warning' ) }}</h6>
                    @endif
                    <form action="/login">
                        <!-- to error: add class "has-danger" -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="password" class="form-control form-control-sm"
                                id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
