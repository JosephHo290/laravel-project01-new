@if ($errors -> any())
<div class='alert alert-danger alert-dissimissable' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
<storng>錯誤!</strong>請更正您輸入的資料!
<ol>
@foreach($errors->all() as $error) <li>{{$error}}</li>@endforeach</ol>
</div>
@endif
{{ Form::open(['route'=> ['comments.store',$post->id],'method'=>'POST'])}}
{{ Form::label('title', '姓名:') }}
{{ Form::text('name') }}<br>
{{ Form::label('title', '電郵:') }}
{{ Form::text('email') }}<br>
{{ Form::label('title', '內容:') }}
{{ Form::textarea('content') }}<br>
{{ Form::hidden('post_id', $post->id) }}<br>
{{ Form::submit('發表回應') }}
{{ Form::close()}}