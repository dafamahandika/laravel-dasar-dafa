<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Hello</title>
</head>
<body>
     <h1>Hello I'm Dafa Mahandika</h1>
     <button><a href="{{route('indexActivity')}}"> Create Activity</a></button>
     <br>
     <br>
     <table border="2">
          <tr>
               <th>No</th>
               <th>Id</th>
               <th>Nama Activity</th>
               <th>Action</th>
          </tr>
          <?php
          $i = 1;
          ?>
          
          @foreach ($data as $datas)
          <tr>
               <td>{{ $i++ }}</td>
               <td>{{ $datas->id }}</td>
               <td>{{ $datas->nama_activity }}</td>
               <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
               </td>
          </tr>
          @endforeach
     </table>
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h2 style="text-align: center;">{{ $message }}</h2>
        </div>
    @endif  
</body>
</html>