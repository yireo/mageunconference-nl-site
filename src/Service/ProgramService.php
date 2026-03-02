<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;

class ProgramService
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private string $projectDir
    ) {
    }

    public function getProgram(): array
    {
        static $program = null;
        if (is_array($program)) {
            return $program;
        }

        $programJson = file_get_contents($this->projectDir . '/content/data/program.json');
        $program = json_decode($programJson, true);
        return $program;
    }

    public function getSession(string $key): ?array
    {
        return $this->program[$key] ?? null;
    }
}
