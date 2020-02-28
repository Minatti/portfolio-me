@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Minhas Postagens</li>
          </ol>
        </nav>    
@stop

@section('content')
   <div class="box">
       <div class="box-header">
         <hr>
       </div>
       <div class="box-body">
          <table class="table table-sm table-bordered table-hover">
            <caption>Lista das postagens</caption>
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data de criação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              @foreach ($user->posts as $p)                
                <th scope="row">{{$p->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$p->title}}</td>
                <td>{{$p->description}}</td>
                <td>{{$p->created_at}}</td>
              @endforeach
              </tr>
            </tbody>
          </table>                  
       </div>       
   </div>
@stop
