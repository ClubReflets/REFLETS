<?php

function edit_str($name) {
    return sprintf('Éditer %s', $name);
}

function new_str($name, $gender_male) {
    $new = $gender_male ? 'Nouveau' : 'Nouvelle';
    return sprintf('%s %s', $new, $name);
}

// Beadcrumbs are used in admin module only.

// Accueil
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Accueil', route('admin'));
});

// Organization
// Accueil > Organisation
Breadcrumbs::for('organization.index', function ($trail, $organization) {
    $trail->parent('admin');
    $trail->push($organization->name, route('organization.index', $organization->id));
});

// Accueil > [Organisation]
Breadcrumbs::for('organization.edit', function ($trail, $organization) {
    $trail->parent('admin');
    $trail->push(edit_str($organization->name), route('organization.edit', $organization->id));
});
