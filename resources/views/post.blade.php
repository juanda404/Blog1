@extends('template')
@section('content')
    <h1>Create Post</h1>
    <form action="" method="post">
        <div>
            <label>Title</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <textarea name="" id="" cols="60" rows="20"></textarea>
            <input type="text" name="" id="" placeholder="Categories">
        </div>
        <div>
            <label>Publish now?</label>
            <input type="button" value="Send">
        </div>
    </form>
@endsection 