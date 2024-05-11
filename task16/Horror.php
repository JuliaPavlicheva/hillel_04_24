<?php

class Horror
{
    use FilmReview;
    private string $title;

    private string $director;

    private int $year;

    public function __construct(string $title, string $director, int $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function culmination(string $culminationTime): string
    {
        return "$culminationTime - culmination\n";
    }

    public function monsterMeeting(string $monster): string
    {
        return "Monster is $monster\n";
    }
}