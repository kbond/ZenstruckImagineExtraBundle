<?php

/*
 * This file is part of the ZenstruckImagineExtraBundle package.
 *
 * (c) Kevin Bond <http://zenstruck.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Bundle\ImagineExtraBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class ZenstruckImagineExtraExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $bundles = $container->getParameter('kernel.bundles');

        if (array_key_exists('LiipImagineBundle', $bundles)) {
            $loader->load('liip.xml');

            return;
        }

        if (array_key_exists('AvalancheImagineBundle', $bundles)) {
            $loader->load('avalanche.xml');

            return;
        }

        throw new InvalidArgumentException('Either "LiipImagineBundle" or "AvalancheImagineBundle" must be available.');
    }
}
