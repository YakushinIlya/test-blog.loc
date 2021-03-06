﻿@extends('layouts.admin-apper')

@section('content')
<div class="container marketing">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="h3">{!! __('Добавление категории') !!}</h1>
            {!! Form::open(['url' => route('adminCategoryAdd'), 'class'=>'form-horizontal', 'method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('head', 'Заголовок:',['class'=>'control-label']) !!}
                    <div class="input-group">
                        {!! Form::text('head', old('head'), ['class' => 'form-control','placeholder'=>'Введите заголовок категории']) !!}
                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                            </span>
                    </div>
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Описание категории:',['class'=>'control-label']) !!}
                <div class="input-group">
                    {!! Form::textarea('content', old('content'), ['class' => 'form-control']) !!}
                    <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                            </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    {!! Form::submit('Сохранить', ['class' => 'btn btn-success']) !!}
                    <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                            </span>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <hr class="featurette-divider">
</div>
@endsection