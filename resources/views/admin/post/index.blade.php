@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
    <h1 class="m-0 text-dark">Posts
           {{$post}}
    </h1>
    <hr>
@stop

@section('content')
   <div class="box">
       <div class="box-header">
           Header
       </div>
       <div class="box-body">
           Body
       </div>       
   </div>
@stop
