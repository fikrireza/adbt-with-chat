@extends('master.layouts.master')

@section('title')
  <title>Adik Bang Taru</title>
  <link rel="stylesheet" href="{{asset('theme/css/uniform.css')}}" />
  <link rel="stylesheet" href="{{asset('theme/css/select2.css')}}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('breadcrumb')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="#" class="current">Chat</a>
    </div>
    <h1>Chat</h1>
  </div>
@endsection

@section('content')
<div id="chat">

  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-chat">
          <div class="widget-title"> <span class="icon"> <i class="icon-comment"></i> </span>
            {{-- <h5>Let's do a chat</h5> --}}<chat-counter></chat-counter>
          </div>
          <div class="widget-content nopadding">
            <div class="chat-content">
              <div class="chat-messages" id="chat-messages">
                <chat-messages :messages="messages"></chat-messages>
              </div>
              <div class="chat-message well">
                <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Chats
                    <chat-counter></chat-counter>
                  </div>

                  <div class="panel-body">
                      <chat-messages :messages="messages"></chat-messages>
                  </div>
                  <div class="panel-footer">
                      <chat-form
                          v-on:messagesent="addMessage"
                          :user="{{ Auth::user() }}"
                      ></chat-form>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

</div>
@endsection

@section('footscript')
<script src="{{ asset('js/app.js') }}"></script>
@endsection
