<?php

namespace App\EventSubscriber;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class JWTDecodedSubscriber implements EventSubscriberInterface
{
    public function onJWTDecodedEvent(JWTDecodedEvent $event): void
    {
        $payload = $event->getPayload();

        print_r($payload);

        $event->markAsInvalid();
    }

    public static function getSubscribedEvents(): array
    {
        return [
            JWTDecodedEvent::class => 'onJWTDecodedEvent',
        ];
    }
}
