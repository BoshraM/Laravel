<!--this is related to practice till insertind data dn displaying the m-->
@extends('layouts.app')
@section('content')
<h1>Home page</h1>
<h2>My name is  {{$name}}</h2>
<h3>I live in {{$city}}</h3>
<h4>I am {{$age}} years old</h4>
<p>Welocme to my first Laravel page.</p>

<h5>This is a for each example</h5>

@foreach ($posts as $post)

  <h6>{{$post['title']}}</h6>
  <p>{{$post['description']}}</p>

@endforeach

<h5>This is an if example</h5>
@if ($name == "Boshra")
  <p>Hello Boshra</p>
@endif

<h5>This is a forelse example</h5>
@forelse ($posts as $post)
  <p>{{$post['title']}}</p>
@empty
  <p>No Posts found</p>
@endforelse

<h5>This is a isset example for checking if variable exists</h5>

@isset($name)
    <p>Hello {{ $name }}</p>
@endisset

<h5>This is a empty example if something is empty</h5>
@empty($posts)
    <p>No posts available</p>
@endempty

<h5>This is a Nemed route Example</h5>

<a href="{{ route('routename') }}">Go to route name</a></br>
<a href="{{ route('welcome') }}">Welcome</a>


<form method="POST" action="{{ route('form.submit') }}">

    @csrf <!-- This adds a security token. -->

    <label>Name:</label>
    <input type="text" name="name">

    <br><br>

    <label>City:</label>
    <input type="text" name="city">

    <br><br>

    <button type="submit">Submit</button>

</form>

@if ($errors->any())

    <ul>
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif
<form method="POST" action="{{ route('form.store') }}">

@csrf

<label>Name:</label>
<input type="text" name="name">

<br><br>

<label>Email:</label>
<input type="text" name="email">

<br><br>

<label>Age:</label>
<input type="text" name="age">

<br><br>

<button type="submit">Submit</button>

</form>
@endsection

 