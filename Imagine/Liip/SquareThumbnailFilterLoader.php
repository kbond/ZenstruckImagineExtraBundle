<?php

/*
 * This file is part of the ZenstruckImagineExtraBundle package.
 *
 * (c) Kevin Bond <http://zenstruck.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine\Liip;

use Zenstruck\Bundle\ImagineExtraBundle\Imagine\AbstractSquareThumbnailFilterLoader;
use Liip\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use Imagine\Image\ImageInterface;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SquareThumbnailFilterLoader extends AbstractSquareThumbnailFilterLoader implements LoaderInterface
{
    public function load(ImageInterface $image, array $options = array())
    {
        return $this->buildFilter($options)->apply($image);
    }
}
