@extends('layouts.app')

@section('content')

<div class="container">

<<<<<<< HEAD
    <div class="panel panel-primary card">
=======
    <div class="panel panel-primary">
>>>>>>> f66f1b3ce6ea8c6d5dfb8557e7c637fbba3fa128

      <div class="panel-heading"><h2>Upload Sighting</h2></div>

      <div class="panel-body">

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

  

        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <input type="file" name="image" class="form-control, upload-border">

            <div class="row">

                <div class="col-md-6">

                    

                    Location:
                    <input type="text" name="location" class="form-control">
                    Description:
                    <input type="textarea" name="description" class="form-control">

                </div>


                <div class="col-md-8">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

   

            </div>

        </form>

  

      </div>

    </div>

</div>

@endsection