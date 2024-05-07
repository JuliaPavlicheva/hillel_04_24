<?php
declare(strict_types=1);

enum TaskStatus: string
{
    case COMPLETED = "Completed";
    case INCOMPLETE = "Not Completed";
}