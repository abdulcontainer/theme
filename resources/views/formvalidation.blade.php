@extends('template.default')
@section ('content')
    <div class="container">
        <h3>Form validation</h3><br>
            <!-- {{$errors}}
            @if($errors->any())
            @foreach ($errors->all as $err)
            <li>{{$err}}</li>
            @endforeach
            @endif   -->
        <form action="{{route('validated')}}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter username"><br>
                <span style="color:red">@error('username'){{$message}}@enderror</span>
                <br><br>
            <input type="password" name="password" placeholder="Enter password"><br>
                <span style="color:red">@error('password'){{$message}}@enderror</span>
                <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection