<?php
// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

/**
 * The assignment of the breadcrumbs is done by name similarity. E.g. for the route Overview --> for('overview', ...
 */

// Overview
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('breadcrumbs.home'), route('home'));
});

// Overview > Test
Breadcrumbs::for('test', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Test', route('test'));
});

// Overview > Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Overview > Register
Breadcrumbs::for('register', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});

/**
 * Further examples:
 */
/*

// Overview > Test > [Variable]
Breadcrumbs::for('variable', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('test');
    $trail->push($variable->title, route('variable', $variable));
});
*/
