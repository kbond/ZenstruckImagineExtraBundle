<?php

namespace Zenstruck\Bundle\ImagineExtraBundle\Tests\Imagine;

use Zenstruck\Bundle\ImagineExtraBundle\Imagine\AbstractSquareThumbnailFilterLoader;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SquareThumbnailFilterLoaderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildFilter()
    {
        $loader = new TestSqareThumbnailFilterLoader();

        $this->assertInstanceOf(
            'Zenstruck\Imagine\Filter\SquareThumbnailFilter',
            $loader->getFilter(array('size' => 200)));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBuildFilterNoSize()
    {
        $loader = new TestSqareThumbnailFilterLoader();

        $loader->getFilter();
    }
}

class TestSqareThumbnailFilterLoader extends AbstractSquareThumbnailFilterLoader
{
    public function getFilter(array $options = array())
    {
        return $this->buildFilter($options);
    }
}
