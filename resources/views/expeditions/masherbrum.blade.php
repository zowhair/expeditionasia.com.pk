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
	@foreach ($expage as $key => $data)
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

	<div class="jumbotron  " style="background-color: #fff;">
                        <div class="row"> 
                          <div class="col-lg-2"></div> 
                          <div class="col-lg-8">
                         <!--  <span class="display-10  welcome-note-head"  data-aos="fade-up"
                           data-aos-anchor-placement="top-bottom" data-aos-duration="1500">{{ $data->title }}</span> -->
                      <!-- class = "lead" -->
	                        <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Summary</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Itinerary</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Detail</a>
      <!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">{{ $data->summary}}</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      	<table class="table table-sm table-dark">
			  <thead>
			    <tr>
			      <th scope="col">Day</th>
			      <th scope="col">Activity</th>
			      <th scope="col">Altitude</th>
			      <th scope="col">Overnight</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>@mdo</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			    
			  </tbody>
			</table>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">{{ $data->detail }}
      	<hr class="my-4"> <br>
      	<h1 class="text-center welcome-note-head">Want to talk in detail?</h1>
      	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <div class="text-center">
 	 <button type="submit" class="btn btn-primary">Send</button>
  	
  </div>
</form>
      </div>
      <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> -->
    </div>
  </div>
</div>
                      
                        </div>
                        </div>
                      <div class="col-lg-2"></div>
                    </div>
	

	
	@endforeach
@endsection
@section('footer')
    @include('components.footer')
@endsection
@section('scripts')
    @include('components.scripts')
@endsection
