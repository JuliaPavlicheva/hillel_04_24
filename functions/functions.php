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

function file_reader(string $file_path, int $lines_amount): string
{
    if (!file_exists($file_path)) {
        return "File not found";
    }

    $result = [];
    $content = file($file_path);
    $last_content = array_slice($content, -$lines_amount);
    foreach ($last_content as $line) {
        $result[] = $line;
    }

    return implode("", $result);
}
