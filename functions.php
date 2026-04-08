<?php

namespace HelloNico\Timber;

use n5s\WpHookKit\Hook;
use Symfony\Bridge\Twig\Extension\DumpExtension;
use Symfony\Component\VarDumper\Cloner\VarCloner;

function add_dump_extension($twig)
{
    if (defined('WP_DEBUG') && WP_DEBUG) {
        $twig->addExtension(new DumpExtension(new VarCloner()));
    }
    return $twig;
}
Hook::addFilter('timber/loader/twig', sprintf('%s\\add_dump_extension', __NAMESPACE__));
