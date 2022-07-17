@extends('Admin.const')
@section('content')
@include('Admin.message')

<!--edit category-->
<div class="card-body">
  <div class="form-group">
  <form class="forms-sample" enctype="multipart/form-data"  method="POST" action="{{ route('Post.update' , $post)}}">
    @csrf
    @method('PUT')
  <label for="exampleInputName1">title</label>
  <input type="text" name='title' class="form-control" id="exampleInputName1" value="{{ $post->title}}">
  </div>
  <div class="form-group">  
  <td>Category: </td>
    <td>
        <select name="category" >
          @foreach ($categories as $cat)
          <option value='{{ $cat->id }}'
            {{ $cat->id==$post->cat_id? 'selected' : ''}}
            >{{ $cat->title }} </option>
          @endforeach
         
        </select>
      </td>
    </div>
  <div class="form-group">
  <label>image</label>
  <input type="file" title="img[]" class="file-upload-default">
  <div class="input-group col-xs-12">
  <input type="text" class="form-control file-upload-info" disabled="">
  <span class="input-group-append">
    <input class="file-upload-browse btn btn-info" type="file" name="img">
  </span>
  </div>
  </div>
  <div class="form-group">
  <label for="exampleTextarea1">decription</label>
  <textarea class="form-control" id="exampleTextarea1" rows="2" name='description'>{{ $post->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-success mr-2" value="create new post">Submit</button>
  
  </form>
  </div>

<!-- page-body-wrapper ends -->

@endsection 