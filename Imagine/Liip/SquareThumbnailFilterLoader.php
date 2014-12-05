<?php

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine\Liip;

use Zenstruck\Bundle\ImagineExtraBundle\Imagine\AbstractSquareThumbnailFilterLoader;
use Liip\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use Imagine\Image\ImageInterface;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SquareThumbnailFilterLoader extends AbstractSquareThumbnailFilterLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ImageInterface $image, array $options = array())
    {
        return $this->buildFilter($options)->apply($image);
    }
}
