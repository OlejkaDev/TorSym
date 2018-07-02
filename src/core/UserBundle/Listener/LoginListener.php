<?php

namespace App\UserBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

/**
 * Listener set to user defined Language.
 *
 * @author  Ramazan Apaydın <iletisim@ramazanapaydin.com>
 */
class LoginListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onLogin',
        ];
    }

    public function onLogin(InteractiveLoginEvent $event)
    {
        // Get User
        $user = $event->getAuthenticationToken()->getUser();

        // Change Site Language to User
        if ($user->getProfile()->getLanguage()) {
            $event->getRequest()->getSession()->set('_locale', $user->getProfile()->getLanguage());
        }
    }
}
