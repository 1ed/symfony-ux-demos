<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('child')]
final class ChildComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $selected = '';
}
