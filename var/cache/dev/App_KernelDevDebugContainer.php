<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRPBovnI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRPBovnI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRPBovnI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRPBovnI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRPBovnI\App_KernelDevDebugContainer([
    'container.build_hash' => 'RPBovnI',
    'container.build_id' => '92679372',
    'container.build_time' => 1600429930,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRPBovnI');
