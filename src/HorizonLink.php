<?php

namespace Alexpgates\HorizonLink;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class HorizonLink extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('horizon-link', __DIR__.'/../dist/js/tool.js');
        // Nova::style('horizon-link', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('horizon-link::navigation');
    }
}