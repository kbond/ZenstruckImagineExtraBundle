<?php
/*
 * This file is part of the ZenstruckImagineExtraBundle package.
 *
 * (c) Kevin Bond <http://zenstruck.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine\Avalanche;

use Zenstruck\Bundle\ImagineExtraBundle\Imagine\AbstractSquareThumbnailFilterLoader;
use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;

/**
* @author Kevin Bond <kevinbond@gmail.com>
 */
class SquareThumbnailFilterLoader extends AbstractSquareThumbnailFilterLoader implements LoaderInterface
{
    public function load(array $options = array())
    {
        return $this->buildFilter($options);
    }
}
