Victoire DCMS ShareThis Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *ShareThis Widget* which enables a social buttons bar to share any content over social platforms.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/sharethis-widget

###Reminder

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
