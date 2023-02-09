<?php

namespace App\Controller;

use App\Service\RequestServiceInterface;
use App\Tool\ResponseTool;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[OA\Tag(name: "Main")]
class MainController extends AbstractController
{
    /**
     * @param Request $request
     * @param RequestServiceInterface $requestServiceInterface
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
            )
        ]
    )]
    public function main(
        Request                 $request,
        RequestServiceInterface $requestServiceInterface,
    ): Response
    {
        print_r("Hello");

        return ResponseTool::getResponse();
    }
}
