# ImagineExtraBundle

Integrates the [imagine-filters](https://github.com/kbond/imagine-filters) library into Symfony2.

**NOTE**: This bundle requires either [LiipImagineBundle](https://github.com/liip/LiipImagineBundle) or
[AvalancheImagineBundle](https://github.com/avalanche123/AvalancheImagineBundle)

## Installation

1. Add to your `composer.json`:

    ```json
    {
        "require": {
            "zenstruck/imagine-extra-bundle": "*"
        }
    }
    ```

2. Register the bundle with Symfony2:

    ```php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Zenstruck\Bundle\ImagineExtraBundle\ZenstruckImagineExtraBundle(),
        );
        // ...
    }
    ```

## SquareThumbnailFilter

* Usage with LiipImagineBundle

    ```yaml
    # app/config/config.yml

    liip_imagine:
        filter_sets:
            square_200:
                filters:
                    square_thumbnail: { size: 200, color: 000000 }
    ```

* Usage with AvalancheImagineBundle

    ```yaml
    # app/config/config.yml

    avalanche_imagine:
        filters:
            square_200:
                type:    square_thumbnail
                options: { size: 200, color: 000000 }
    ```

### Default Configuration

```yaml
color:          FFFFFF
transparency:   0
```
