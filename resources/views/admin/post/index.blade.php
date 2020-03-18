@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <a href="post/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle" aria-hidden="true"> </i> Novo Post </a>
          </ol>
        </nav>    
@stop

@section('content')
   <div class="box">
       <div class="box-header">
        
       </div>
       <div class="box-body">
          <table class="table table-dark table-hover table-condesed">
            <thead class="bg-head">
              <tr>
                <th scope class="text-center">Autor</th>
                <th scope="col" class="text-center">Título</th>
                <th class="text-center">Imagem</th>
                <th scope="col" class="text-center">Descrição</th>
                <th scope="col" class="text-center">Data de criação</th>
                <th class="text-center"> Ações </th>
              </tr>              
              @foreach ($user->posts as $p) 
            </thead>
            <tbody>
              <tr>                                  
                <td>{{$user->name}}</td>
                <td>{{$p->title}}</td>
                <td>{{$p->image}}</td>
                <td>{{$p->description}}</td>
                <td>{{$p->created_at}}</td>
                <td> <a href="/admin/post/edit/{{$p->id}}" class="btn btn-sm btn-danger">  <i class="fas fa-edit" aria-hidden="true"> </i>Editar</a></td>
              @endforeach
              </tr>
            </tbody>
          </table>                  
       </div>       
   </div>
@stop
