<?php

declare(strict_types=1);

namespace Proget\IcnsParser;

final class IcnsElement
{
    private string $type;
    private string $data;

    public function __construct(string $type, string $data)
    {
        $this->type = $type;
        $this->data = $data;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function data(): string
    {
        return $this->data;
    }
}
