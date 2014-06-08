<?php

namespace Mhujer\ApiDemoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class GistsController extends FOSRestController
{
    public function getGistsAction()
    {
        return new JsonResponse(['list' => 'foo']);
    }
}
