<?php

Timber\Timber::render('@Templates/dummy_template.twig', [
    'post' => new Timber\Post()
]);
