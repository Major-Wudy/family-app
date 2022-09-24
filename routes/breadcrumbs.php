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
Breadcrumbs::for('overview', function (BreadcrumbTrail $trail) {
    $trail->push(__('breadcrumbs.overview'), route('overview'));
});

// Overview > Test
Breadcrumbs::for('test', function (BreadcrumbTrail $trail) {
    $trail->parent('overview');
    $trail->push('Test', route('test'));
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
