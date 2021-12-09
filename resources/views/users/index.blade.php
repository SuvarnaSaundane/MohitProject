@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<body>
<!-- <div>
<ul>
@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach
</ul>

</div> -->
​
<h2>
​{{ $title }}
​</h2>

<form action="{{url('insert')}}" method="POST" id="frm">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name"  name="name" placeholder="Enter Name">
  @error('name')
  <div>{{$message}}</div>
  @enderror<br>


  <label for="email">Email:</label><br>
  <input type="text" id="email"  name="email" placeholder="Enter Email">
  @error('email')
  <div>{{$message}}</div>
  @enderror<br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="email" name="password" placeholder="Enter Password">
  @error('password')
  <div>{{$message}}</div>
  @enderror<br><br>

  <input type="submit"  value="Submit">
</form> 



​

@endsection
@push('custome-script')
<script src="{{url('js/user.js')}}">

</script>
@endpush
​
