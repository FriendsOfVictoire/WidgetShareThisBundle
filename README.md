Victoire DCMS ShareThis Bundle
============

Need to add a sharethis in a victoire cms website ?
Get this sharethis bundle and so on

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

    php composer.phar require friendsofvictoire/sharethis-widget

Do not forget to add the bundle in your AppKernel !

```php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\ShareThisBundle\VictoireWidgetShareThisBundle(),
            );

            return $bundles;
        }
    }
```
