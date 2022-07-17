@extends('Admin.const')
@section('content')
@include('Admin.message')

<a href="#exampleInputName1" class="btn btn-success mr-2">Add Post</a>
<!-- pigen ctable -->
<div class="card-body" style="width:100%; height:auto; overflow:auto">
  <table class="table table-striped"  >
    <thead>
      <tr>
        <th> imge </th>
        <th> Id </th>
        <th> Title </th>
        <th> Category </th>
        <th> Description </th>
        <th> Actions </th>

      </tr>
    </thead>
    <tbody>

      @foreach ($posts as $post) 
         <tr>
          <td class="py-1">
            <img src="{{ asset('PostImge/'.$post->imge) }}" alt="image">
          </td>
          <td> <?php 
          
          $id= $post['id'];
          echo $id;?> </td>
          <td> {{ $post->title }} </td>
          <td> {{ $categories->find($post->cat_id)->title	 }} </td>
          <td> {{ $post->description }} </td>
          <td>
            <a  class="btn btn-success mr-2" href="{{route('Post.edit', $post)}}" class="btn-secondary"> update </a> &nbsp;
           
            <form method="post" action="{{route('Post.destroy',$id)}}">
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
<form class="forms-sample" method="POST"  enctype="multipart/form-data" action="{{ route('Post.store') }}">
        @csrf
      <div class="form-group">
      <label for="exampleInputName1" >title</label>
      <input type="text" class="form-control" id="exampleInputName1" name="title">
      </div>
      <div class="form-group">
      <td>Category: </td>
        <td>
            <select name="category" >
              @foreach ($categories as $cat)
              <option value='{{ $cat->id }}'>{{ $cat->title }} </option>
              @endforeach
            </select>
          </td>
        </div>
      <div class="form-group">
      <label>image</label>
      <input type="file" title="img[]" class="file-upload-default" >
      <div class="input-group col-xs-12">
      <input type="text" class="form-control file-upload-info" disabled="">
      <span class="input-group-append">
        <input class="file-upload-browse btn btn-info" type="file" name="img">

          
      </div>
      </div>
      <div class="form-group">
      <label for="exampleTextarea1">decription</label>
      <textarea class="form-control" id="exampleTextarea1" rows="2"  name="description"  ></textarea>
      </div>
      <button type="submit" class="btn btn-success mr-2" value="create new post">Submit</button>
      
  </form>
  </div>
  

@endsection 