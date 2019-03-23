<?php

namespace Namet\Tagsinput;

use Encore\Admin\Extension;

class Tagsinput extends Extension
{
    /**
     * @var string
     */
    protected $view = 'laravel-admin-tagsinput::tagsinput';

    /**
     * @var array
     */
    protected static $css = [
        'vendor/namet/laravel-admin-tagsinput/tagsinput.min.css?v=0.2',
    ];

    /**
     * @var array
     */
    protected static $js = [
        'vendor/namet/laravel-admin-tagsinput/tagsinput.js?v=0.2',
    ];
}
