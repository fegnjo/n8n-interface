@extends('layouts/app')
@section('content')
    <div class="container">
        <h1>Статистика обзвона</h1>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Количество чатов</th>
                    <th scope="col">{{$count->count_chats}}</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Количество анкет</th>
                    <th scope="col">{{$count->count_ankets}}</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Незавершенные диалоги</th>
                    <th scope="col">{{$count->dialogue}}</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Завершенные диалоги</th>
                    <th scope="col">{{$count->completed}}</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
