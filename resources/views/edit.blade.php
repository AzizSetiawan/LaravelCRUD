<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    <div class="container">
        <h2 style="margin-top:20px;">Edit Data Buku</h2><br/>
        <form method="post" action="{{action('BukuController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{$bukus->judul}}">
            </div>
        </div>  
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="{{$bukus->penerbit}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="tahun_terbit">Tahun terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" value="{{$bukus->tahun_terbit}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" value="{{$bukus->pengarang}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6"></div>
            <button type="submit" class="btn btn-success" style="width:150px; margin-left:25px;">Update</button>
        </form>
    </div>
    </body>
</html>