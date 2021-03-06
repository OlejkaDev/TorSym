<?php

namespace App\UserBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Localization.
 *
 * routing : /language/lang
 *
 * @author  Ramazan Apaydın <iletisim@ramazanapaydin.com>
 */
class LocaleListener implements EventSubscriberInterface
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        if ($locale = $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        } else {
            $request->setLocale($request->getSession()->get('_locale', $request->getDefaultLocale()));
        }
    }

    public static function getSubscribedEvents()
    {
        return [KernelEvents::REQUEST => [['onKernelRequest', 15]]];
    }
}
