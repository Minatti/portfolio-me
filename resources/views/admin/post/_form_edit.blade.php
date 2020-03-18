@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Editar Postagem</li>            
          </ol>
        </nav>    
@stop
@section('content')
      <div class="box-body">
          <form class="" action="update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{$post->id}}">
                  </div>                           
                  <div class="form-group">
                    <label for="lb_title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                  </div>
                  <div class="custom-file">
                    <label class="custom-file-label" for="customFile">{{$post->image}}</label>
                    <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$post->image}}">
                  </div>                                                                    
                  <div class="form-group">
                    <label for="lb_content">Description</label>
                   <textarea class="form-control" name="description">{{$post->description}}</textarea>
                  </div>                                           
                <button  class="btn btn-outline-primary">Salvar</button>
          </form>      
      </div>
  @stop
