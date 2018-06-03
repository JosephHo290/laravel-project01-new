@if (session('message'))
<div class='alert alert-danger alert-dissimissable' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
<storng>訊息:</strong>{{session('message')}}
</div>
@endif
@foreach($posts as $post){
	<span>{{$post->id}}</span>
	<hr>
	<h2>{{$post->title}}</h2>
	<h3>{{$post->sub_title}}</h3>
	<h4>{!! $post->content !!}</h4>
	<h4>{{$post->is_feature}};{{$post->page_view}};{{$post->created_at}};{{$post->updated_at}}</h4>
	<hr>
}
@endforeach