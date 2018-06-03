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
{{ Form::model($post,['route'=> ['posts.update',$post->id],'method'=>'PATCH'])}}
{{ Form::label('title', '標題:') }}
{{ Form::text('title') }}<br>
{{ Form::label('title', '副標題:') }}
{{ Form::text('sub_title') }}<br>
{{ Form::label('title', '內容:') }}
{{ Form::textarea('content') }}<br>
{{ Form::label('title', '瀏覽次數:') }}
{{ Form::number('page_view') }}<br>
{{ Form::label('title', '精選?:') }}
{{ Form::number('is_feature') }}<br>
{{ Form::submit('更新文章') }}
{{ Form::close()}}