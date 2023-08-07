@extends('layouts.app')

@section('title')
    EmreYAMAN Pagination
@endsection

@section('css')
@endsection

@section('content')


<div>
    <table class="table table-success">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <div class="row" >
        <form action="" method="get">
            <textarea name="text" id="editor"></textarea>

        </form>
    </div>

    <div class="">
         {!! $users->links(); !!}
    </div>

@endsection

@section('js')
@endsection
