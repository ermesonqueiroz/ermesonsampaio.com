<?php

namespace App\LaravelMarkdown;

use League\CommonMark\Environment\EnvironmentBuilderInterface;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Torchlight\Commonmark\V2\TorchlightExtension;

class MarkdownRendererWithTorchlight extends MarkdownRenderer
{
    public function configureCommonMarkEnvironment(EnvironmentBuilderInterface $environment) : void
    {
        parent::configureCommonMarkEnvironment($environment);
        $environment->addExtension(new TorchlightExtension());
    }
}
