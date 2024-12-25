@extends('layouts/app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                    <h1>Анкета</h1>
                    @if($anketa)
                        @foreach($anketa as $ank) {{$ank}} <br> @endforeach
                    @else
                        {{'Анкета отсутсвует'}}
                    @endif
            </div>
            <div class="col-md-6">
                    <h1>Чат</h1>
                    <div>
                        <div class="">
                            <div class="col-10 chat-messages card">

                                @foreach($chat as $message)

                                    @if($message['is_bot'] == 'True')
                                        <div class="chat-message-right pb-4">
                                            <div>
                                                {{--                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">--}}
                                                <img src="{{asset('/images/кот.jpg')}}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">

                                                <div class="text-muted small text-nowrap mt-2">{{date('Y-m-d H:m:s', intval($message['message_time']))}}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                {{--                                        <div class="font-weight-bold mb-1"><b>Бот</b></div>--}}
                                                <b>{{"Бот: :" }}</b> {{ $message['message']}}
                                            </div>
                                        </div>
                                    @else
                                        <div class="chat-message-left pb-4">
                                            <div>
                                                {{--                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">--}}
                                                <img src="{{asset('/images/толератность.jpg')}}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">

                                                <div class="text-muted small text-nowrap mt-2">{{date('Y-m-d H:m:s', intval($message['message_time']))}}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                {{--                                        <div class="font-weight-bold mb-1"><b>Соискатель</b></div>--}}
                                                <b>{{"Соискатель: :" }}</b> {{ $message['message']}}
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>

                        </div>
                    </div>
            </div>


        </div>
    </div>

@endsection
