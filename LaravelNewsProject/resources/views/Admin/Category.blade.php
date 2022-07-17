@extends('Admin.const')
@section('content')
@include('Admin.message')
<a href="#exampleInputName1" class="btn btn-success mr-2">Add Category</a>
<!-- pigen ctable -->
<div class="card-body" style="width:100%; height:auto; overflow:auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th> imge </th>
        <th> Id </th>
        <th> Title </th>
        <th> Description </th>
        <th> Actions </th>

      </tr>
    </thead>
    <tbody>

      @foreach ($category as $cat) 
         <tr>
          <td class="py-1">
            <img src="{{ asset('CategoryImge/'.$cat->imge) }}" alt="image">
          </td>
          <td> <?php 
          
          $id= $cat['id'];
          echo $id;
          ?> </td>
          <td> {{ $cat->title }} </td>
          <td> {{ $cat->description }} </td>
          <td>
            
            <a href="{{route('Category.edit',$cat)}}" class="btn-secondary"> update </a> &nbsp;
           
            <form method="post" action="{{route('Category.destroy', $id  )}}">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-success mr-2">delete</button>
           </form>         
           </td>
        </tr>
        <tr>     
  @endforeach
  
    </tbody>
  </table>
</div>
<!--Add Admin-->
<div class="card-body">
  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('Category.store') }}">
    @csrf
        <div class="form-group">
  <label for="exampleInputName1">title</label>
  <input type="text" name="title" class="form-control" id="exampleInputName1" value="">
  </div>
  <div class="form-group">
    <label>image</label>
    <input type="file" name="img" title="img[]" class="file-upload-default" >
    <div class="input-group col-xs-12">
    <input type="text" class="form-control file-upload-info" disabled="">
    <span class="input-group-append">
      <input class="file-upload-browse btn btn-info" type="file" name="img">

  </div>
  </div>
  <div class="form-group">
  <label for="exampleTextarea1">decription</label>
  <textarea name="description" class="form-control" id="exampleTextarea1" rows="2" ></textarea>
  </div>
  <button type="submit" class="btn btn-success mr-2">Submit</button>
  
  </form>
  </div>
  

@endsection 