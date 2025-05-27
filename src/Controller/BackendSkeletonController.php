<?php

declare(strict_types=1);

/*
 * Skeleton Bundle for Contao Open Source CMS
 * @author     Web Ex Machina
 *
 * @see        https://github.com/Web-Ex-Machina/contao-skeleton-bundle/
 * @license    https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 */

namespace WebExMachina\SkeletonBundle\Controller;

use Contao\CoreBundle\Controller\AbstractBackendController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('%contao.backend.route_prefix%/skeleton', name: self::class, defaults: ['_scope' => 'backend'])]
#[IsGranted('ROLE_ADMIN', message: 'Access restricted to administrators.')]
class BackendSkeletonController extends AbstractBackendController
{

    public function __invoke(): Response
    {

        return $this->render('@Contao/skeleton_bundle/skeleton.html.twig', [
            'error' => 'Oh no, an error!',
            'title' => 'My title',
            'headline' => 'My headline',
            'version' => 'I can overwrite what I want',
            'foo' => 'bar',
        ]);
    }
}
