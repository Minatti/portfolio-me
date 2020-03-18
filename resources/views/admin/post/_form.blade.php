@extends('adminlte::page')

@section('title', 'Novo Post')

@section('content_header')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Nova Postagem</li>            
          </ol>
        </nav>    
@stop
@section('content')
  <div class="box">
      <div class="box-header">
        <h3></h3>
      </div>
      <div class="box-body">
          <form class="" action="store" method="post" enctype="multipart/form-data">{{ csrf_field() }}                                         
                  <div class="form-group">
                    <label for="lb_title">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title"></input>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="user_id">
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile" name="image">Thumbnail</label>
                  </div>                                                                    
                  <div class="form-group">
                    <label for="lb_content">Description</label>
                   <textarea class="form-control" name="description"></textarea>
                  </div>
                  <div class="form-group">                    
                    <input type="hidden" class="form-control" value="<?php date_default_timezone_set('America/Sao_Paulo');
                      echo date('d/m/Y H:i:s');?>" name="created_at"></input>
                  </div>
                  <div class="form-group">                    
                    <input type="hidden" class="form-control" value="<?php date_default_timezone_set('America/Sao_Paulo');
                      echo date('d/m/Y H:i:s');?>" name="updated_at"></input>
                  </div>                                                
                <button  class="btn btn-outline-primary">Salvar</button>
                <a  href="../post" class="btn btn-outline-primary">Voltar</a>
          </form>      
      </div>
  </div> 
  @stop
