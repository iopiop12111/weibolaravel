@extends('layouts.default')
@section('title', $info->name)

@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <section class="user_info">
                        {{ $info->name }}
                        @include('layouts._user_info', ['user' => $info])
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop
