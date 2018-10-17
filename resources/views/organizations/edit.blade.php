@extends('layouts.admin')

@section('content')
    <h1>Edit Org</h1>
    {!! Form::open(['action' => ['OrganizationController@update', $org->id], 'method' => 'PUT']) !!}
        <legend class="uk-legend">Éditer {{$org->name}}</legend>
        {{ Form::uiText('name', 'Nom', $org->name) }}
        {{ Form::uiTextarea('description', 'Description', $org->description) }}
        {{ Form::uiHidden('hidden', $org->email) }}
        {{ Form::uiFile('logo', 'Logo') }}
        {{ Form::uiSubmit() }}
    {!! Form::close() !!}
@endsection
