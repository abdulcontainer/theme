@extends('template.default')
@section('content')
    <div class="container">
        <h1>Upload a File</h1>
        <div>
            <form action="upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file"> <br><br>
                <button type="submit">Upload a File</button>
            </form>
        </div>
    </div>
@endsection