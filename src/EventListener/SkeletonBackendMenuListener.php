<?php

declare(strict_types=1);

/*
 * Skeleton Bundle for Contao Open Source CMS
 * @author     Web Ex Machina
 *
 * @see        https://github.com/Web-Ex-Machina/contao-skeleton-bundle/
 * @license    https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 */

namespace  WebExMachina\SkeletonBundle\EventListener;

use Contao\CoreBundle\Event\ContaoCoreEvents;
use Contao\CoreBundle\Event\MenuEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RequestStack;
use WebExMachina\SkeletonBundle\Controller\BackendSkeletonController;

#[AsEventListener(ContaoCoreEvents::BACKEND_MENU_BUILD, priority: -255)]
final readonly class SkeletonBackendMenuListener
{
    public function __construct(
        private RequestStack $requestStack
    ) {
    }

    public function __invoke(MenuEvent $event): void
    {
        $factory = $event->getFactory();
        $tree = $event->getTree();

        if ($tree->getName() !== 'mainMenu') {
            return;
        }

        $contentNode = $tree->getChild('content');

        $node = $factory
            ->createItem('my-skeleton', ['route' => BackendSkeletonController::class])
            ->setLabel('Skeleton Menu')
            ->setLinkAttribute('title', 'Title')
            ->setLinkAttribute('class', 'my-skeleton')
            ->setCurrent(
                $this->requestStack->getCurrentRequest()->get('_controller') === BackendSkeletonController::class
            )
        ;

        $contentNode->addChild($node);
    }
}
