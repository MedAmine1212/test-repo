<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIo8FzeX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIo8FzeX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIo8FzeX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIo8FzeX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIo8FzeX\App_KernelDevDebugContainer([
    'container.build_hash' => 'Io8FzeX',
    'container.build_id' => '7cfb8482',
    'container.build_time' => 1681571906,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIo8FzeX');
