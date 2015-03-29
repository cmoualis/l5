@extends('back.default')
@section('content')
    @include('back.partials.entete', ['title' =>  trans('back/users.dashboard'), 'icone' => 'user', 'fil' => link_to('users', trans('back/users.Users')) . ' / ' . trans('back/users.creation')])
    <div class="col-sm-12">
        {!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
        {!! Form::control('text', 0, 'username', $errors, trans('back/users.name')) !!}
        {!! Form::control('email', 0, 'email', $errors, trans('back/users.email')) !!}
        {!! Form::control('password', 0, 'password', $errors, trans('back/users.password')) !!}
        {!! Form::control('password', 0, 'password_confirmation', $errors, trans('back/users.confirm-password')) !!}
        {!! Form::selection('role', $select, null, trans('back/users.role')) !!}
        {!! Form::submit(trans('front/form.send')) !!}
        {!! Form::close() !!}
    </div>

@endsection