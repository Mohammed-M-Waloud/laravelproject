@extends('Admin.const')
@section('content')
{{-- @php
    dd($category);

    $category=Category::find($category);

@endphp --}}
<!--edit category-->
<div class="card-body">
  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('Category.update',$category)}}">
    @csrf
    @method('PUT')
<div class="form-group">
<label for="exampleInputName1">title</label>
<input type="text" name='title' class="form-control" id="exampleInputName1" value="<?php echo $category->title?>">
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
<textarea name='description' class="form-control" id="exampleTextarea1" rows="2" ><?php echo ($category->description);?></textarea>
</div>
<button type="submit" class="btn btn-success mr-2">Submit</button>

</form>
</div>

<!-- page-body-wrapper ends -->

@endsection 
