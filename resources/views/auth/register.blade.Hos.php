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
{{ Form::open(['route'=> ['register.process'],'method'=>'POST'])}}
{{ Form::label('title', '姓名:') }}
{{ Form::text('name',null,['id'=>'name']) }}<br>
{{ Form::label('title', '電郵:') }}
{{ Form::email('email',null,['id'=>'email']) }}<br>
{{ Form::label('title', '密碼:') }}
{{ Form::password('password',null,['id'=>'password']) }}<br>
{{ Form::label('title', '確認密碼:') }}
{{ Form::password('password_confirmation',null,['id'=>'password_confirmation']) }}<br>
{{ Form::submit('註冊') }}
{{ Form::close()}}