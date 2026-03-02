<?php

namespace App\Twig;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class SvgExtension extends AbstractExtension
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private string $projectDir)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('inline_svg', [$this, 'inlineSvg'],
                ['is_safe' => ['html']]),
        ];
    }

    public function inlineSvg(string $path): string
    {
        $fullPath = $this->projectDir . '/assets/' . $path;

        if (!is_file($fullPath)) {
            return '';
        }

        return file_get_contents($fullPath) ?: '';
    }
}
