@extends('layouts.app')

@section('content')

<chat-component 
:user={{Auth::user()}} 
:messages="messages" 
v-on:messagesent="addMessage"
v-on:session="addSession"
v-on:delete_message="delMessage"
></chat-component>

@endsection
