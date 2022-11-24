@extends('layouts.main')
@section('content')
     <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif -->
                <div class="container">
                    <main class="form">
                        <form action="{{ route('updateActivity', $data->id) }}" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Add Activity</h1>
                            <div class="form-floating">
                                <input type="text" name="nama_activity" class="form-control mt-2" id="name" value="{{$data->nama_activity}}">
                                <label for="name">Name</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-secondary mt-4" type="submit">Submit</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
@endsection
