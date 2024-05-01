<?php

class Text
{
    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function print_text(): string
    {
        return ucfirst($this->text);
    }
}