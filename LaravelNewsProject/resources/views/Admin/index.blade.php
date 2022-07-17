@extends('Admin.const')
@section('content')


@php
$users = $users->count('id');
$posts = $posts->count('id');
$categories = $categories->count('id');
@endphp
  <!-- partial -->
  <div class="main-panel">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="d-flex">
            <div class="wrapper">
              <h3 class="mb-0 font-weight-semibold">@php
                echo $users ;
              @endphp </h3>
              <h5 class="mb-0 font-weight-medium text-primary">Admins</h5>
            </div>
            <div class="wrapper my-auto ml-auto ml-lg-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas height="62" width="125" id="stats-line-graph-1" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
          <div class="d-flex">
            <div class="wrapper">
              <h3 class="mb-0 font-weight-semibold">@php
                echo $categories ;
              @endphp</h3>
              <h5 class="mb-0 font-weight-medium text-primary">categories</h5>
            </div>
            <div class="wrapper my-auto ml-auto ml-lg-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas height="62" width="125" id="stats-line-graph-2" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
          <div class="d-flex">
            <div class="wrapper">
              <h3 class="mb-0 font-weight-semibold">@php
                echo $posts ;
              @endphp</h3>
              <h5 class="mb-0 font-weight-medium text-primary">posts</h5>
            </div>
            <div class="wrapper my-auto ml-auto ml-lg-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas height="62" width="125" id="stats-line-graph-3" style="display: block; height: 50px; width: 100px;" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      
      </div>
    </div>
@endsection
