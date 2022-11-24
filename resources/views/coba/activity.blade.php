@extends('layouts.main')
@section('content')
     <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="container">
                    <main class="form">
                        <form action="{{route('storeActivity')}}" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Add Activity</h1>

                            <div class="form-floating">
                                <input type="text" name="nama_activity" class="form-control mt-2" id="name" placeholder="Nama Activity">
                                <label for="name">Name</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-secondary mt-4" type="submit">Submit</button>
                            
                        </form>
                    </main>
                </div>
            </div>
        </div>
@endsection
