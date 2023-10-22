<?php

namespace App\Markdown;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
use League\CommonMark\Extension\CommonMark\Renderer\Block\FencedCodeRenderer;
use League\CommonMark\Extension\CommonMark\Renderer\Block\IndentedCodeRenderer;
use League\CommonMark\Parser\MarkdownParser;
use League\CommonMark\Renderer\HtmlRenderer;

class MarkdownConverter
{
    static function convert(string $content): string
    {
        $environment = (new Environment())
            ->addExtension(new CommonMarkCoreExtension())
            ->addRenderer(FencedCode::class, new FencedCodeRenderer(), 10)
            ->addRenderer(IndentedCode::class, new IndentedCodeRenderer(), 20);

        $parser = new MarkdownParser($environment);
        $htmlRenderer = new HtmlRenderer($environment);

        $document = $parser->parse($content);
        return $htmlRenderer->renderDocument($document);
    }
}
