@extends('layouts/app')
@section('content')
    <div class="container">
        <h1>Чаты</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id пользователя</th>
                <th scope="col">Никнейм</th>
                <th scope="col">Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($chats as $chat)
            <tr>
                <td><a href="{{ route('chat', $chat->user_id) }}">{{ $chat->user_id }}</a></td>
                <td>{{ $chat->username }}</td>
                <td>{{ $chat->adddate }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div>{{$chats->links()}}</div>
    </div>
@endsection
