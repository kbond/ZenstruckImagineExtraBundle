<?php

namespace Zenstruck\Bundle\ImagineExtraBundle\Imagine;

use Imagine\Image\Palette\RGB;
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
     *
     * @return SquareThumbnailFilter
     */
    protected function buildFilter(array $options = array())
    {
        if (!isset($options['size'])) {
            throw new \InvalidArgumentException('"size" option is required.');
        }

        $defaults = array(
            'color' => 'FFFFFF',
            'transparency' => 0
        );

        $options = array_merge($defaults, $options);

        return new SquareThumbnailFilter(
            new Box($options['size'], $options['size']),
            $this->createColor($options['color'], (int) $options['transparency'])
        );
    }

    /**
     * @param string $color
     * @param int    $transparency
     *
     * @return \Imagine\Image\Color|\Imagine\Image\Palette\Color\ColorInterface
     */
    private function createColor($color, $transparency)
    {
        if (class_exists('Imagine\Image\Color')) {
            return new Color($color, $transparency);
        }

        $palette = new RGB();

        return $palette->color($color, $transparency);
    }
}
