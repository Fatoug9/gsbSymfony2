<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSUVhqdC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSUVhqdC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSUVhqdC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSUVhqdC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSUVhqdC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SUVhqdC',
    'container.build_id' => 'e21fb1a2',
    'container.build_time' => 1616401230,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSUVhqdC');
