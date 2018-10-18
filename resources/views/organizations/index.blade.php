@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('organization.index', $org) }}
@endsection

@section('title')
{{$org->name}}
@endsection

@section('content-header')
<div>
    <a class="uk-button uk-button-primary" href="{{route('organization.edit', $org->id)}}">
        <span uk-icon="icon: pencil"></span>
        Éditer
    </a>
</div>
@endsection

@section('content')
@endsection
