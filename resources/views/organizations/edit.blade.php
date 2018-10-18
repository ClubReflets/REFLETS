@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('organization.edit', $org) }}
@endsection

@section('title')
    Éditer {{$org->name}}
@endsection

@section('content')
    {!! Form::open(['action' => ['OrganizationController@update', $org->id], 'method' => 'PUT']) !!}
        {{ Form::uiText('name', 'Nom', $org->name) }}
        {{ Form::uiTextWithIcon('email', 'mail' ,'Email', $org->email) }}
        {{ Form::uiTextarea('description', 'Description', $org->description) }}
        <div class="uk-grid">
            <div class="uk-width-1-2@s">
                {{ Form::uiTextWithIcon('facebook', 'facebook' ,'Lien Facebook', $org->facebook) }}
            </div>
            <div class="uk-width-1-2@s">
                {{ Form::uiTextWithIcon('instagram', 'instagram' ,'Lien Instagram', $org->instagram) }}
            </div>
        </div>
        {{ Form::uiFile('logo') }}
        {{ Form::uiFile('cover') }}
        {{ Form::uiSubmit() }}
    {!! Form::close() !!}
@endsection
