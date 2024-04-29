@extends('template')
@section('content')
    <h1>aqui iniciamos el home</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label>Email</label>
                <input type="email" name="mail" id="emails">
            </li>
            <li>
                <label>Password</label>
                <input type="password" name="pass" id="password">
            </li>
            <input type="button" value="Send">
        </ul>
    </form>
@endsection 