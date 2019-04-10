<?php

add_filter('timber/loader/loader', function (\Twig_Loader_Filesystem $loader) {
    $loader->addPath(__DIR__.'/templates', 'Templates');

    return $loader;
});
