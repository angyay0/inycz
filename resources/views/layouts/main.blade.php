@extends('layouts.master')

@section('title', 'Gallery')

@section('header')
    @parent
@endsection

@section('content')

    <!--{!! Form::open(array('url' => 'list', 'method' => 'get')) !!}
        {!!Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S', array('class' => 'awesome'));!!}
        {!!Form::text('name')!!}
        {!!Form::submit('Buscar')!!}
    {!! Form::close() !!}-->

    <div class="row vcenter">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-8">
          <br>
          <form action="" method="get" role="search">
              <div class="input-group input-group-lg">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Comprar <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-left">
                        <li><a href="#">Comprar</a></li>
                        <li><a href="#">Vender</a></li>
                    </ul>
                </span>
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary dropdown-toggle custom" data-toggle="dropdown">Casa<span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Casa</a></li>
                        <li><a href="#">Departamento</a></li>
                        <li><a href="#">Local</a></li>
                    </ul>
                </span>
                <input type="text" name="query" class="form-control" placeholder="Ciudad, Localidad, Colonia...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div>
          </form>
      </div>
      <div class="col-lg-2">
      </div>
    </div>

@endsection
