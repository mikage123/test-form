@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{route('register')}}" class="form">
    @csrf
    お名前:<input type="text" name="name"><br>
    メール:<input type="text" name="email"><br>
    パスワード:<input type="password" name="password"><br>
    <button type="submit">登録</button>
</form>