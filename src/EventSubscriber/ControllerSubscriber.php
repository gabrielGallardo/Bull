<?php

/*
 * This file is part of the Symfony package.
 * (c) Fabien Potencier <fabien@symfony.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\EventSubscriber;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class ControllerSubscriber implements EventSubscriberInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
           'kernel.controller' => 'onKernelController',
        ];
    }
}
