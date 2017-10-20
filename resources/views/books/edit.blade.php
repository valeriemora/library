@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      {!! Form::open(['url' => 'books/update']) !!}
      <h1>Editar {{ $book->name }}</h1>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div align="center" class="panel-heading"><strong>REGISTER A NEW BOOK</strong></div>
          <div class="panel-body">
            <input type="hidden" name="id" value="{{ $book['id'] }}">
            <div class="panel-heading" align="center"><strong>NAME</strong></div>
            <div class="col-md-12">
              <input id="name" type="text" class="form-control" name="name" value="{{ $book['name'] }}" placeholder="NAME" style="text-transform:uppercase" required>
            </div>
            <br><br>
            <div class="panel-heading" align="center"><strong>AUTHOR</strong></div>
            <div class="col-md-12">
              <input id="author" type="text" class="form-control" name="author" value="{{ $book['author'] }}"  placeholder="AUTHOR" style="text-transform:uppercase" required>
            </div>
            <br><br><br>
            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
              <label for="category_id" class="col-md-2 control-label">CATEGORY</label>
              <div class="col-md-4">
                <?php echo Form::select('category_id', array(     '0'  => 'CHOOSE CATEGORY',
                '1' => 'MISTERY',
                '2' => 'DRAMA',
                '3' => 'CHICK LIT',), null, array('class' => 'form-control')); ?>
              </div>
              <label  class="col-md-2 control-label">PUBLISHED DATE</label>
              <div class="col-md-3">
                <input id="published" type="date" class="form-control" name="published" value="{{ $book['published'] }}"  style="text-transform:uppercase" required>
              </div>
            </div>
            <br><br>
            <div class="">
              <div class="panel-heading" align="center"><strong>USER</strong></div>
              <div class="col-md-12">
                <input id="user" type="text" class="form-control" name="user" value="{{ $book['user'] }}"  placeholder="USER" style="text-transform:uppercase" required>
              </div>
            </div>
            <br>
            <br>
            <div class="">
              <br>
              <div class="form-group">
                <div class="col-md-4 col-md-offset-4" align="center">
                  <input class="btn btn-primary" type="submit" value="UPDATE">
                  <input class="btn btn-secondary" type="button" value="CANCEL" onClick="location.href='/books'">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4 col-md-offset-4" align="center">
                </div>
              </div>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  @endsection
