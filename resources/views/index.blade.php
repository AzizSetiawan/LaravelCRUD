<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <style type="text/css">
    button.blue{
      color:#ffff;
      background:#4570ad;
      outline: none;
      border-radius: 4px;
      width: 50px;
      border: none;

    }
  </style>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div>
       <h2>Daftar Buku Perpustakaan</h2>
      <a href="bukus/create"><button class="btn btn-success float-right" style="margin-bottom:20px; width:150px;">Add Book</button></a>
     </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Pengarang</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($bukus as $bukus)
      <tr>
        <td>{{$bukus['id']}}</td>
        <td>{{$bukus['judul']}}</td>
        <td>{{$bukus['penerbit']}}</td>
        <td>{{$bukus['tahun_terbit']}}</td>
        <td>{{$bukus['pengarang']}}</td>
        
        <td>
        <a href="{{action('BukuController@edit', $bukus['id'])}}" ><button class="btn blue">Edit</button></a></td>
        <td>
          <form action="{{action('BukuController@destroy', $bukus['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>