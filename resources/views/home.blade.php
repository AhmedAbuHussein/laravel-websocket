@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                  <h2><b>نظام محادثات شخصي</b></h2>
                </div>

                <div class="card-body" id="app">
                  <chat-app :user="{{auth()->user()}}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
