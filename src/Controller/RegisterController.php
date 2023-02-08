<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Attributes as OA;

class RegisterController extends AbstractController
{
    #[Route('/api/register', name: 'app_register', methods: ["POST"])]
    #[OA\Post(
        description: "Endpoint is getting details of audiobook",
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
            ),
        ),
        responses: [
            new OA\Response(
                response: 200,
                description: "Success",
            )
        ]
    )]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RegisterController.php',
        ]);
    }
}
