<?php
declare(strict_types=1);

function show_message(mixed $message): void
{
    echo $message;
}

function file_writer(string $file_path, string $content_to_add): void
{
    file_put_contents($file_path, $content_to_add . "\n", FILE_APPEND);
}
