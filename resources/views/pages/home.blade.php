@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')

    Ini adalah halaman home <br>  <br/>
    Hello, {!! $name[0]  !!} <br>  <br/>

    <x-alert theme="success" closeable="true">
        Ini adalah alert!
    </x-alert>

    <br/>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Klik Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Hallo Wardah Selamat Datang.....:))
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Oke</button>
          </div>
        </div>
      </div>
    </div>


    <br/>
    <br/>

   
   
@stop

@section('js')

    <script>
        console.log('Hello');
    </script>

@stop