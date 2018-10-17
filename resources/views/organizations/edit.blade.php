@extends('layouts.admin')

@section('content')
    <h1>Edit Org</h1>
    {!! Form::open(['action' => ['OrganizationController@update', $org->id], 'method' => 'PUT']) !!}
        <legend class="uk-legend">Éditer {{$org->name}}</legend>
        <div>
            {{ Form::label('name', 'Nom', ['class' => 'uk-form-label']) }}
            {{ Form::text('name', $org->name, ['class' => 'uk-input', 'placeholder' => 'Nom']) }}
        </div>
        <div>
            {{ Form::label('description', 'Description', ['class' => 'uk-form-label']) }}
            {{ Form::textarea('description', $org->description, ['class' => 'uk-textarea', 'placeholder' => 'Description']) }}
        </div>
    {!! Form::close() !!}
@endsection
