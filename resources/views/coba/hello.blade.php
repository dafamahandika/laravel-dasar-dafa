<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Hello world!</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

    </style>
</head>

<body>
    @if ($message = Session::get('success'))
    <div>
        <p>{{$message}}</p>
    </div>
    @endif

    <p>Hello World!</p>
    <a href="{{route('about')}}">About</a>
    <a href="{{route('indexActivity')}}">Activity</a><br><br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Activity</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$dt->id}}</td>
          <td>{{$dt->nama_activity}}</td>
          <td>
            <a href="{{route('indexEditActivity', $dt->id)}}">edit</a>
          </td>
        </tr>
        @endforeach
    </table>
</body>

</html>