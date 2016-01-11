@extends('layout')

@section('head')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('footer')
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/vendor/jasekz/laradrop/js/enyo.dropzone.js"></script>
  <script src="/vendor/jasekz/laradrop/js/laradrop.js"></script>

  <script>
  jQuery(document).ready(function(){
      jQuery('.laradrop').laradrop({
          onInsertCallback: function (src){
            // this is called when the 'select' button is clicked on a thumbnail
              alert('File '+src+' selected.  Please implement onInsertCallback().');
          }
      });
  });
  </script>
@stop

@section('content')
  <div class="laradrop"
    laradrop-upload-handler="{{ route('laradrop.store') }}"
    laradrop-file-delete-handler="{{ route('laradrop.destroy') }}"
    laradrop-file-source="{{ route('laradrop.index') }}"
    laradrop-csrf-token="{{ csrf_token() }}" >
    <button class='btn btn-primary laradrop-select-file' >Add File</button>
  </div>


@stop
