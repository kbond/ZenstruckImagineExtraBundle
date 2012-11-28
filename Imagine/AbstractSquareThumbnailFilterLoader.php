<?php
/*
 * This file is part of the ZenstruckImagineExtraBundle package.
 *
 * (c) Kevin Bond <http://zenstruck.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine;

use Zenstruck\Imagine\Filter\SquareThumbnailFilter;
use Imagine\Image\Box;
use Imagine\Image\Color;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
abstract class AbstractSquareThumbnailFilterLoader
{
    /**
     * @param array $options
     * @return \Zenstruck\Imagine\Filter\SquareThumbnailFilter
     */
    protected function buildFilter(array $options = array())
    {
        $defaults = array(
            'color' => 'FFFFFF',
            'transparency' => 0
        );

        $options = array_merge($defaults, $options);

        return new SquareThumbnailFilter(
            new Box($options['size'], $options['size']),
            new Color($options['color'], $options['transparency'])
        );
    }
}
