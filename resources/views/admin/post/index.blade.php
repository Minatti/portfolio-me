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
        <a href="{{ route ('form-new.blade.php') }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle" aria-hidden="true"> </i> Adicionar </a>
        <a href="" class="btn btn-sm btn-danger">  <i class="far fa-edit" aria-hidden="true"> </i> Editar </a>
        <hr>
       </div>
       <div class="box-body">
          <table class="table table-sm table-bordered table-hover">
            <caption>Lista das postagens</caption>
            <thead>
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Autor</th>
                <th scope="col" class="text-center">Título</th>
                <th scope="col" class="text-center">Descrição</th>
                <th scope="col" class="text-center">Imagem</th>
                <th scope="col" class="text-center">Data de criação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              @foreach ($user->posts as $p)                
                <th scope="row">{{$p->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$p->title}}</td>
                <td>{{$p->description}}</td>
                <td>{{$p->image}}</td>
                <td>{{$p->created_at}}</td>
              @endforeach
              </tr>
            </tbody>
          </table>                  
       </div>       
   </div>
@stop
