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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar</div>

                <div class="panel-body">
                  <form class="" action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('admin.post._form')
                    <button  class="btn btn-default">Salvar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection