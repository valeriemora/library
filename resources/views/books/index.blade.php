@extends('layouts.app')
@section('content')
  <div class="" align="center">
    <h1>Maniak Library</h1>
  </div>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-11 col-md-offset-4">
          {{-- {!! Form::open(['url' => 'cuentas/busqueda']) !!}
          BÚSQUEDA DE CUENTAS POR FECHA:
          <input type="date" name="fechainicio" > a
          <input type="date" name="fechafinal" >
          <input type="submit" name="" class="btn btn-small btn-info" value="BUSCAR CUENTAS">
          {{ Form::close() }} --}}
        </div>
        <br><br><br>
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading" align="center">BOOKS</div>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td>NAME</td>
                  <td>AUTHOR</td>
                  <td>CATEGORY</td>
                  <td>PUBLISHED DATE</td>
                  <td>STATUS</td>
                  <td>OPTIONS</td>
                </tr>
              </thead>
              <tbody>
                @foreach($books as $key => $value)
                  <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->author }}</td>
                    <td>
                      <?php
                      $category_id =  $value->category_id;
                      switch ($category_id) {
                        case 1:
                        echo "MISTERY";
                        break;
                        case 2:
                        echo "DRAMA";
                        break;
                        case 3:
                        echo "CHICK LIT";
                        break;
                      }
                      ?></td>
                      <td>{{ $value->published }}</td>
                      <td>
                        <?php
                        $status =  $value->status;
                        switch ($status) {
                          case 1:
                          echo "AVAIABLE";
                          break;
                          case 0:
                          echo "NOT AVAIBALE";
                          break;
                        }
                        ?></td>
                        <td>
                          <a class="btn btn-small btn-success" href="{{ URL::to('books/show/' . $value->id) }}">See Book</a>
                          <a class="btn btn-small btn-info" href="{{ URL::to('books/' . $value->id . '/edit') }}">Edit</a>
                          <a class="btn btn-small btn-warning" href="{{ URL::to('books/' . $value->id . '/destroy') }}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </body>

    @endsection
