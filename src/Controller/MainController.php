<?php

namespace App\Controller;

use App\Model\MainModel;
use App\Tool\ResponseTool;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[OA\Tag(name: "Main")]
class MainController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/api/main', name: 'app_main', methods: ["GET"])]
    #[OA\Get(
        description: "Endpoint is used to check token",
        requestBody: new OA\RequestBody(),
        responses: [
            new OA\Response(
                response: 200,
                description: "Success",
                content: new Model(type: MainModel::class)
            )
        ]
    )]
    public function main(): Response
    {
        return ResponseTool::getResponse(new MainModel("ITS WORKING !!!"));
    }
}
