<?php

declare(strict_types=1);

namespace Snippet\Controller\Model;

class ArgumentsContainer
{
    /**
     * @var string
     */
    private $snippetArgument;

    /**
     * @var array
     */
    private $snippetArguments;

    /**
     * @param string $snippetArgument
     * @param array $snippetArguments
     */
    public function __construct(string $snippetArgument = '', array $snippetArguments = [])
    {
        $this->snippetArgument = $snippetArgument;
        $this->snippetArguments = $snippetArguments;
    }

    /**
     * return string
     */
    public function getSnippetArgument(): string
    {
        return $this->snippetArgument;
    }

    /**
     * return array
     */
    public function getSnippetArguments(): array
    {
        return $this->snippetArguments;
    }
}
