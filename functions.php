<?php

namespace HelloNico\Timber;

use HelloNico\Twig\DumpExtension;

function add_dump_extension($twig)
{
    $twig->addExtension(new DumpExtension());
    return $twig;
}

if (WP_DEBUG && function_exists('add_filter')) {
    add_filter('timber/loader/twig', sprintf('%s\\add_dump_extension', __NAMESPACE__));
}
