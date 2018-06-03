{{ Form::model($post,['route'=> ['posts.destroy',$post->id],'method'=>'DELETE'])}}
{{ Form::label('title', '標題:') }}
{{ Form::text('title') }}<br>
{{ Form::label('title', '副標題:') }}
{{ Form::text('sub_title') }}<br>
{{ Form::label('title', '內容:') }}
{{ Form::textarea('content') }}<br>
{{ Form::submit('刪除文章') }}
{{ Form::close()}}