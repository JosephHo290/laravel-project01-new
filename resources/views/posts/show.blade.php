@if (session('message'))
<div class='alert alert-danger alert-dissimissable' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
<storng>訊息:</strong>{{session('message')}}
</div>
@endif
<h2>{{$post->title}}</h2>
<h3>{{$post->sub_title}}</h3>
<p>{!! $post->content !!}</p>
<h4>{{$post->is_feature}};{{$post->page_view}};{{$post->created_at}};{{$post->updated_at}}</h4>