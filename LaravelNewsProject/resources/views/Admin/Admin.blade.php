@extends('Admin.const')
@section('content')
@include('Admin.message')

<!-- pigen ctable -->
<a href="#exampleInputName1" class="btn btn-success mr-2">Add Admin</a>
<div class="card-body" style="width:100%; height:auto; overflow:auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Email </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>

 @foreach ($User as $user) 
<tr>
  <td> <?php $id=$user->id;
    echo $id?></td>
  <td> {{ $user->name }}</td>
  <td> {{ $user->email }}</td>
  <td>
    <a href="{{route('Admin.edit', $user)}}" class="btn-secondary"> update </a> &nbsp;
    <form method="post" action="{{route('Admin.destroy',$id)}}">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-success mr-2">delete</button>
   </form>
  </td>
</tr>
 @endforeach
      
    </tbody>
  </table>
</div>

<!--Add Admin-->
<div class="card-body">
  <form class="forms-sample" enctype="multipart/form-data"  method="POST"  action="{{ route('Admin.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputName1">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail3">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-success mr-2">Submit</button>
  </form>
</div>
@endsection