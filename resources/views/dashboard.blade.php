@extends('layouts.base')
@section('title', 'Homepage')
@section('css')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<script src="{{ asset('js/dashboard.js') }}"></script>
@stop
    @section('content')
    <!-- <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="/dashboard">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        Stars Components
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Forms
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                        Pages
                    </span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Graphs and Statistics
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                        Quotes
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-table fa-2x"></i>
                    <span class="nav-text">
                        Tables
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">
                        Maps
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                        Documentation
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav> -->

    <div class="dash-content">
        <div class="create button">
            <button id="createConsultaEvent" class="btn btn-primary"> Criar Consulta </button>
        </div>
        <div class="table-box">
            <table id="tabela_consulta" class="table">
                <thead>
                    <tr>
                        <th scope="col"> Nome do Paciente </th>
                        <th scope="col"> Telefone </th>
                        <th scope="col"> Endereço </th>
                        <th scope="col"> Observação </th>
                        <th scope="col"> Data da Consulta </th>
                        <th scope="col"> Dentista Responsável </th>
                        <th scope="col"> Editar Consulta </th>
                        <th scope="col"> Remover Consulta </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultas as $item=>$valor)
                        <tr>
                            <td>{{ $valor->nome }}</td>
                            <td>{{ $valor->telefone }}</td>
                            <td>{{ $valor->endereco }}</td>
                            <td>{{ $valor->observacao }}</td>
                            <td>{{ $valor->data_consulta }}</td>
                            <td>{{ $valor->dentista_responsavel }}</td>
                            <td class="td-items"><i name="edit" class="bi bi-pencil-square"
                                    data-consulta="{{ json_encode($valor, JSON_UNESCAPED_UNICODE) }}"></i></td>
                            <td class="td-items"><a href="/consulta/delete/{{ $valor->id }}"><i name="delete"
                                    class="bi bi-x-square-fill"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $consultas->links( "pagination::bootstrap-4") !!}
        </div>
        <div class="change password">
            <button id="changePassword" class="btn btn-primary"> Mudar Senha do Usuário </button>
        </div>

        <div class="change password">
            <a href="/logout"><button class="btn btn-primary">Deslogar</button></a>
        </div>
    </div>
    @stop
