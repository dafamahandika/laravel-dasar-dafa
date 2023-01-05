    @extends('layouts.main')
    @section('content')    
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Activity {{ auth()->user()->name }}
                            <a href="{{route('indexActivity')}}" class="btn btn-success float-end">Tambah Activity</a>
                        </h4>
                        
                    </div>
                    <table class="table-bordered table table-striped text-center">
                        <tr class="table-dark">
                            <th>No</th>
                            <th>ID</th>
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
                            <form action="{{route('deleteActivity', $dt->id) }}" method="post">
                                <a class="btn btn-success" href="{{route('indexEditActivity', $dt->id) }}">Edit</a>
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success d-flex justify-content-center" width="15" height="10" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @endif
                    
                    @if ($message = Session::get('edit'))
                    <div class="alert alert-primary d-flex justify-content-center" width="15" height="10" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @endif
                    
                    @if ($message = Session::get('delete'))
                    <div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
