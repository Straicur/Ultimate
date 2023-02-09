<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener(event: JWTDecodedEvent::class, method: 'onJWTDecoded')]
class JWTDecodedListener
{
    /**
     * @param JWTDecodedEvent $event
     * @return void
     */
    public function onJWTDecoded(JWTDecodedEvent $event): void
    {
        $payload = $event->getPayload();

        print_r($payload);

        $event->markAsInvalid();
    }
}
