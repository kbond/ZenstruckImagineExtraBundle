<?php

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine\Avalanche;

use Zenstruck\Bundle\ImagineExtraBundle\Imagine\AbstractSquareThumbnailFilterLoader;
use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;

/**
* @author Kevin Bond <kevinbond@gmail.com>
 */
class SquareThumbnailFilterLoader extends AbstractSquareThumbnailFilterLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $options = array())
    {
        return $this->buildFilter($options);
    }
}
