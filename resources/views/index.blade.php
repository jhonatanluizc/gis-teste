@extends('layouts.base')
@section('title', 'Homepage')
@section('css')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<script src="{{ asset('js/index.js') }}"></script>
@stop
    @section('content')
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Sistema de Cadastro de Consulta de uma Clinica de Odontológica</h3>
                <div class="card-text">
                    <!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                    <form method="POST" action="/login">
                        <!-- to error: add class "has-danger" -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>                            
                            <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
