@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row d-flex justify-content-start">
                Статистика
            </div>
            <div class="row d-flex justify-content-start">
                Анкета
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-end max-width:100">
                <div class="col-md-6">
                    <!-- DIRECT CHAT PRIMARY -->
                    <div class="box box-primary direct-chat direct-chat-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">|ИМЯ БОТА|</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-left">Имя пользователя</span>
                                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-info -->
                                    <div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div><div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div><div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div><div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div><div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-right">Имя бота</span>
                                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                    </div>
                                    <!-- /.direct-chat-info -->
                                    <div class="direct-chat-text">
                                        You better believe it!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!--/.direct-chat -->
                </div>

            </div>
        </div>

    </div>
@endsection
