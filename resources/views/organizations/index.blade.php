@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('organization.index', $org) }}
@endsection

@section('content')
    <header class="uk-grid">
        <div>
            <h2>{{$org->name}}</h2>
        </div>
        <div>
            <a class="uk-button uk-button-primary" href="{{route('organization.edit', $org->id)}}">
                <span uk-icon="icon: pencil"></span>
                Éditer
            </a>
        </div>
    </header>
    <hr>
@endsection
