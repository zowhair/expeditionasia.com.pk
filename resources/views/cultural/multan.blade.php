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

  <!-- @include('components.top-img-content') -->
	@foreach ($cpage as $key => $data)

  <br />
<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-6">
      <img src="{{ asset('img/multan1.jpg') }}" class="img-fluid" alt="...">
    </div>
    <div class="col">
      
    </div>
  </div>
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
