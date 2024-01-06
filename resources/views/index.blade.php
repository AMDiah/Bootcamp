<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Bootcamp4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  @include('layouts.navbar')

    
  @if(Session::has('success'))
    <div class="='alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>   
  @endif
    <div class="col-md-8 mx-auto">
      <div class="card mb-5 mt-3">
        <div class="card-body align text-center">
        Selamat datang.
        </div>
    </div>
    <h5 class="text-center"> TABEL GAMES</h5>
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama </th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($games as $g)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$g->nama}}</td>
                    <td>{{$g->deskripsi}}</td>
                    <td>
                      <a class="btn btn-warning" href="{{ route('edit', $g->id) }}" role="button">Update</a>
                      <a class="btn btn-danger" href="{{ route('destroy', $g->id) }}" method="POST" onclick="return confirm('yakin?');" role="button">Delete</a>
                      @csrf
                      @method('DELETE')
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    
  


    

