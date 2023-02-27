<?php

namespace App\EventSubscriber;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;

class JWTDecodedSubscriber implements EventSubscriberInterface
{  private LoggerInterface $endpointLogger;

    public function __construct(LoggerInterface $endpointLogger)
    {
        $this->endpointLogger = $endpointLogger;
    }

    public function onJWTDecodedEvent(JWTDecodedEvent $event, Request $request): void
    {
        $payload = $event->getPayload();
        $this->endpointLogger->error("DSADSA");
        print_r("DSADSA");
//        print_r($request);
        $event->markAsInvalid();
    }

    public static function getSubscribedEvents(): array
    {
        return [
            JWTDecodedEvent::class => 'onJWTDecodedEvent',
        ];
    }
}
