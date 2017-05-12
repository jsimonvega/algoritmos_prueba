<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 15/11/2016
 * Time: 17:34
 */

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use SoapServer;
use Zend\Soap\AutoDiscover;

class HelloController extends Controller {

    public function index(Request $request, Response $response) {
        return $response->write('Hello world');
    }

    public function wsdl(Request $request, Response $response) {
        $autodiscover = new AutoDiscover();
        $autodiscover->setClass(\App\Models\User::class)
            ->setServiceName('MyServices')
            ->setUri($this->container['WEBSERVICE_URL']);

        $response->withHeader('Content-type', 'Content-type: application/xml');
        $response->write($autodiscover->toXml());
    }

    public function indexWS(Request $request, Response $response) {
        $options = array('uri' => $this->container['WEBSERVICE_URL'],'location' => $this->container['WEBSERVICE_URL']);
        //$server = new SoapServer($this->container['WEBSERVICE_URL'] . "/wsdl", $options);

        $server = new SoapServer($this->container["BASE_DIR"] . '/test.wsdl', $options);

        $server->setClass(\App\Models\User::class);
        $server->handle();
    }
}