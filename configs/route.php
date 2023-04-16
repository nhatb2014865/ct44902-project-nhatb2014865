<?php
$__config['route'] = [
    'home' => 'client/home',
    'home/(.+)' => 'client/home/$1',
    'admin' => 'admin/dashboard/category',
    'admin/(.+)' => 'admin/dashboard/category/$1',

    'admin/category' => 'admin/dashboard/category',
    'admin/category/(.+)' => 'admin/dashboard/category/$1',
    'admin/addCategory' => 'admin/dashboard/addCategory',
    'admin/addCategory/(.+)' => 'admin/dashboard/addCategory/$1',
    'admin/deleteCategory' => 'admin/dashboard/deleteCategory',
    'admin/deleteCategory/(.+)' => 'admin/dashboard/deleteCategory/$1',
    'admin/showCategory' => 'admin/dashboard/showCategory',
    'admin/showCategory/(.+)' => 'admin/dashboard/showCategory/$1',

    'admin/genre' => 'admin/dashboard/genre',
    'admin/genre/(.+)' => 'admin/dashboard/genre/$1',
    'admin/addGenre' => 'admin/dashboard/addGenre',
    'admin/addGenre/(.+)' => 'admin/dashboard/addGenre/$1',
    'admin/deleteGenre' => 'admin/dashboard/deleteGenre',
    'admin/deleteGenre/(.+)' => 'admin/dashboard/deleteGenre/$1',
    'admin/showGenre' => 'admin/dashboard/showGenre',
    'admin/showGenre/(.+)' => 'admin/dashboard/showGenre/$1',
    'admin/getCategory' => 'admin/dashboard/getCategory',
    'admin/getCategory/(.+)' => 'admin/dashboard/getCategory/$1',

    'admin/anime' => 'admin/dashboard/anime',
    'admin/anime/(.+)' => 'admin/dashboard/anime/$1',
    'admin/addAnime' => 'admin/dashboard/addAnime',
    'admin/addAnime/(.+)' => 'admin/dashboard/addAnime/$1',
    'admin/deleteAnime' => 'admin/dashboard/deleteAnime',
    'admin/deleteAnime/(.+)' => 'admin/dashboard/deleteAnime/$1',
    'admin/showAnime' => 'admin/dashboard/showAnime',
    'admin/showAnime/(.+)' => 'admin/dashboard/showAnime/$1',
    'admin/getGenre' => 'admin/dashboard/getGenre',
    'admin/getGenre/(.+)' => 'admin/dashboard/getGenre/$1',

    'signout' => 'login/signout',
    'signout/(.+)' => 'login/signout/$1',
    'signin' => 'login/signin',
    'signin/(.+)' => 'login/signin/$1',
    'signup' => 'login/signup',
    'signup/(.+)' => 'login/signup/$1'
];
