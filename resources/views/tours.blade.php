<!-- {{$tours}} -->
@foreach ($tours as $key => $data )
	<tr>
		<th>{{$data->title}}</th>
	</tr>
@endforeach