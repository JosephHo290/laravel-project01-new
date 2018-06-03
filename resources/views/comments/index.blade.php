@foreach($comments as $comment){
	<h3>{{$comment->name}}</h3>
	<h3>{{$comment->email}}</h3>
	<h2>{{$comment->content}}</h2>
	<h3>{{$comment->post_id}}</h3>
	<h3>{{$comment->created_at}}</h3>
	<h3>{{$comment->updated_at}}</h3>
}
@endforeach