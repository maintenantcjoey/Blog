<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRgKsa4x\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRgKsa4x/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRgKsa4x.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRgKsa4x\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRgKsa4x\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'RgKsa4x',
    'container.build_id' => '9dca1099',
    'container.build_time' => 1541615664,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRgKsa4x');
