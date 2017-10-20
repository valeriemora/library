@extends('layouts.app')
<style>
.row.show{
  margin-top: 12px !important;
}
.panel-success>.panel-heading{
  color: #333 !important;
  background-color: rgba(119, 119, 119, 0.74) !important;
  border-color: #CCC !important;
  border-left-color: #CCC !important;
  border-top-color: #CCC !important;
}
</style>
@section('content')
  <body>
    <div class="row"></div>
    <br>
    <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading text-center">BIBLIOGRAPHY</div>
        <div class="panel-body">
          <div class="row show">
            <div class="col-md-4"><h3>BOOK:</strong> {{ $book->name }}</h3></div>
          </div>

          <div class="row show">
            {{-- <div class="col-md-4"></div> --}}
            <div class="col-md-4"><strong>AUTHOR:</strong> {{ $book->author }}</div>
            <div class="col-md-4"><strong>CATEGORY: </strong><?php
            $category_id =  $book->category_id;
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
            ?></div>
            <div class="col-md-4">
              <strong>PUBLISHED DATE: </strong> {{ date('m-Y', strtotime($book->published))}}<br>
            </div>
            <br>
          </div>
          <div class="row show">
            <div class="col-md-4"><strong>USER:</strong> {{ $book->user }}</div>
          </div>
        </div>
        <br>
      </div>
      <div class="col-md-4 col-md-offset-4" align="center">
        <br>
        <input class="btn btn-secondary" type="button" value="BACK" onClick="location.href='/books/'">
      </div>
    </div>
  </body>
@endsection
