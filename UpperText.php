<?php

class UpperText extends Text
{
    public function print_text(): string
    {
        return strtoupper($this->text);
    }
}