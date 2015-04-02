<?php

class LayoutController extends \BaseController {

    public function masterView()
    {
        return View::make('layout.master');
    }
    public function appView()
    {
        return View::make('layout.app');
    }

    public function headerView()
    {
        return View::make('layout.header');
    }

    public function asideView()
    {
        return View::make('layout.aside');
    }

    public function navView()
    {
        return View::make('layout.nav');
    }


}