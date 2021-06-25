@extends('layouts.app')
@section('meta')
    @include('components.meta')
@endsection
@section('topbanner')
  @include('components.topbanner')
@endsection
@section('navbar')
  @include('components.navbar')
@endsection
@section('content')
  @foreach ($cpage as $key => $data)
<div class="jumbotron text-center " style="background-color: #fff;">
    <div class="row"> 
    <div class="col-lg-2"></div> 
    <div class="col-lg-8">
    <span class="display-10  welcome-note-head"  >{{ $data->title }}</span>
<!-- class = "lead" -->
  <p class=" welcome-note" >{{ $data->summary}} </p>
  <hr class="my-4">
  <p class=" welcome-note" >{{ $data->detail }}</p>
  <!-- <a class="btn btn-primary btn-lg" href="#" role="button" style="font-family: 'Nanum Myeongjo', serif;">Learn more</a> -->
</div>
  
</div>
<div class="col-lg-2"></div>
</div>

  
  @endforeach
  
  @include('components.write_us')
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('scripts')
    @include('components.scripts')
@endsection
