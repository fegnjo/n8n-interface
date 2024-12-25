@extends('layouts/app')
@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger container">
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="list-style-type: none">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Статистика обзвона</h1>
        <form action="{{route('home')}}" method="get">
            <div class="mb-3">
                <label for="session-date">Да от:</label>
                <input  value="@if(isset($_GET['start_date'])) {{$_GET['start_date']}} @else {{date('Y-m-d')}} @endif"  type="date" id="session-date" name="start_date">
                <label for="session-date">Дата до:</label>
                <input  value="@if(isset($_GET['end_date'])) {{$_GET['end_date']}} @else {{date('Y-m-d')}} @endif"  type="date" id="session-date" name="end_date">
                <button type="submit" class="btn btn-primary">Найти</button>

            </div>
        </form>
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
        <div id="chart"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        var options = {
            series: [{{$count->count_chats}}, {{$count->count_ankets}}, {{$count->dialogue}}, {{$count->completed}}],
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['Количество чатов', 'Количество анкет', 'Незавершенные диалоги', 'Завершенные диалоги'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
