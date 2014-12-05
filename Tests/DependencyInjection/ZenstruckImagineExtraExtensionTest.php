<?php

namespace Zenstruck\Bundle\ImagineExtraBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Zenstruck\Bundle\ImagineExtraBundle\DependencyInjection\ZenstruckImagineExtraExtension;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class ZenstruckImagineExtraExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadAvalancheImagineBundle()
    {
        $this->setParameter('kernel.bundles', array('AvalancheImagineBundle' => 'AvalancheImagineBundle'));
        $this->load();
        $this->compile();

        $this->assertContainerBuilderHasService('zenstruck_imagine_extra.filter.loader.avalanche.square', 'Zenstruck\Bundle\ImagineExtraBundle\Imagine\Avalanche\SquareThumbnailFilterLoader');
    }

    public function testLoadLiipImagineBundle()
    {
        $this->setParameter('kernel.bundles', array('LiipImagineBundle' => 'LiipImagineBundle'));
        $this->load();
        $this->compile();

        $this->assertContainerBuilderHasService('zenstruck_imagine_extra.filter.loader.liip.square', 'Zenstruck\Bundle\ImagineExtraBundle\Imagine\Liip\SquareThumbnailFilterLoader');
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
     */
    public function testNoImagineBundle()
    {
        $this->setParameter('kernel.bundles', array());
        $this->load();
        $this->compile();
    }

    protected function getContainerExtensions()
    {
        return array(new ZenstruckImagineExtraExtension());
    }
}
