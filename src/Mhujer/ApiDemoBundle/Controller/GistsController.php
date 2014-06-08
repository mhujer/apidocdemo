<?php

namespace Mhujer\ApiDemoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\JsonResponse;

class GistsController extends FOSRestController
{
    /**
     * List the authenticated user’s gists or if called anonymously, this will return all public gists:
     *
     * @ApiDoc(
     *      parameters={
     *          {
     *              "name"="since",
     *              "dataType"="string",
     *              "required"=false,
     *              "description"="A timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ. Only gists updated at or after this time are returned."
     *          }
     *      }
     * )
     */
    public function getGistsAction()
    {
        return new JsonResponse(
            json_decode(file_get_contents(__DIR__ . '/../Data/Gists/getGists.json')),
            200,
            [
                'Link' => '<https://api.github.com/resource?page=2>; rel="next", <https://api.github.com/resource?page=5>; rel="last"',
                'X-RateLimit-Limit' => 5000,
                'X-RateLimit-Remaining' => 4999
            ]
        );
    }

    /**
     * Get a single gist
     *
     * @ApiDoc()
     *
     * @param $id
     * @return JsonResponse
     */
    public function getGistAction($id)
    {
        return new JsonResponse(json_decode(file_get_contents(__DIR__ . '/../Data/Gists/getGist.json')));
    }
}
