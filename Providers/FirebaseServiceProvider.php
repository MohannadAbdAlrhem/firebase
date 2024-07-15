<?php

use Illuminate\Support\ServiceProvider;


class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    public function boot()
    {
        dd('test-firebase');
    }
}
