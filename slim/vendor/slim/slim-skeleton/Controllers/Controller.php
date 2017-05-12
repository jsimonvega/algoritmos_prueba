<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 15/11/2016
 * Time: 17:30
 */

namespace App\Controllers;


use Slim\Container;

abstract class Controller {

    protected $container;


    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}