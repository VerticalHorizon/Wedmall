<?php
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push(Lang::get('labels.home'), route('home'));
});

Breadcrumbs::register('category', function($breadcrumbs, $category) {
    if ($category->parent)
        $breadcrumbs->parent('category', $category->parent);
    else
        $breadcrumbs->parent('home');

    $breadcrumbs->push($category->title, route('category', $category->alias));
});

Breadcrumbs::register('products', function($breadcrumbs, $product) {
    $breadcrumbs->parent('category', $product->category);
    $breadcrumbs->push($product->title, url($product->alias));
});