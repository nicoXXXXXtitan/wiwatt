<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXyJrMxL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXyJrMxL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXyJrMxL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXyJrMxL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXyJrMxL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XyJrMxL',
    'container.build_id' => '0c3bec0c',
    'container.build_time' => 1586527539,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXyJrMxL');
