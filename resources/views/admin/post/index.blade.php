@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Lista das postagens</li>
          </ol>
        </nav>    
@stop

@section('content')
   <div class="box">
       <div class="box-header">
        <a href="post/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle" aria-hidden="true"> </i> Adicionar </a>
        <a href="" class="btn btn-sm btn-danger">  <i class="far fa-edit" aria-hidden="true"> </i> Editar </a>
        <hr>
       </div>
       <div class="box-body">
          <table class="table table-sm table-bordered table-hover">
            <thead>
              <tr>
                <th scope class="text-center">ID</th>
                <th scope class="text-center">Autor</th>
                <th scope="col" class="text-center">Título</th>
                <th scope="col" class="text-center">Descrição</th>
                <th scope="col" class="text-center">Data de criação</th>
              </tr>              
              @foreach ($user->posts as $p) 
            </thead>
            <tbody>
              <tr>                     
                <td>{{$p->id}}</td>                
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
