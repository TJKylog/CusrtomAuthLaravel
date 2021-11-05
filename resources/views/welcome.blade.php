@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">ID</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <button type="submit" >Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
