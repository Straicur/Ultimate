<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\Request;

#[AsEventListener(event: JWTDecodedEvent::class, method: 'onJWTDecoded')]
class JWTDecodedListener
{
    private LoggerInterface $endpointLogger;

    public function __construct(LoggerInterface $endpointLogger)
    {
        $this->endpointLogger = $endpointLogger;
    }

    /**
     * @param JWTDecodedEvent $event
     * @return void
     */
    public function onJWTDecoded(JWTDecodedEvent $event, Request $request): void
    {
        $payload = $event->getPayload();
        $this->endpointLogger->error("DSADSA");
        print_r($payload);

        $event->markAsInvalid();
    }
}
