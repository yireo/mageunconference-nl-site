<?php

namespace App\Twig;

use League\CommonMark\CommonMarkConverter;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class Markdown extends AbstractExtension
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private string $projectDir)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('markdown', [$this, 'markdown'],
                ['is_safe' => ['html']]),
        ];
    }

    public function markdown(string $path): string
    {
        $fullPath = $this->projectDir . '/content/markdown/' . $path . '.md';

        if (!is_file($fullPath)) {
            return '';
        }

        $content = file_get_contents($fullPath) ?: '';
        $converter = new CommonMarkConverter();
        return $converter->convert($content);
    }
}
