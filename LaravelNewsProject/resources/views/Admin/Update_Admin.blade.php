@extends('Admin.const')
@section('content')
@include('Admin.message')
{{-- 
@php
    $User=$User->find(1); 
    
@endphp --}}
<!--edit Admin-->
<div class="card-body">
  <form class="forms-sample" method="POST" action="{{ route('Admin.update' , $User)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
<label for="exampleInputName1">Name</label>
<input name="name" type="text" class="form-control" id="exampleInputName1" value="<?php echo $User->name?>">
</div>
<div class="form-group">
<label for="exampleInputEmail3">Email address</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail3" value="<?php echo $User->email?>">
</div>
<div class="form-group">
<label for="exampleInputPassword4">Password</label>
<input type="password" name="password" class="form-control" id="exampleInputPassword4" >
<div>
  <br>
</div>
<button type="submit" class="btn btn-success mr-2">Submit</button>
</form>
</div>

<!-- page-body-wrapper ends -->

@endsection