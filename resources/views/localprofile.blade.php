@extends('template.default')
@section('content')

<div class="container">
    <h1>{{__('profile.welcome')}}</h1>
    <h1>{{__('profile.language')}}</h1>
        <h3>{{__('profile.name')}}<a href="">{{__('profile.myname')}}</a></h3> 
        <h3>{{__('profile.age')}}<a href="">{{__('profile.myage')}}</a></h3> 
        <h3>{{__('profile.education')}}<a href="">{{__('profile.myeducation')}}</a></h3>
        <h3>{{__('profile.residence')}}<a href="">{{__('profile.myresidence')}}</a></h3> 
</div>

@endsection