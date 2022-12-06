<?php

namespace App\Twig\Components;

use App\Repository\TaskRepository;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\TwigComponent\Attribute\ExposeInTemplate;

#[AsLiveComponent('task_editor')]
final class TaskEditorComponent
{
    use DefaultActionTrait;

    public function __construct(
        private readonly TaskRepository $taskRepository,
    )
    {
    }

    #[ExposeInTemplate]
    public function getTasks(): array
    {
        return $this->taskRepository->findAll();
    }
}
