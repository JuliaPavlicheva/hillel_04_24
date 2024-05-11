<?php

class Comedy
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

    public function comedyScenes(array $scenes): array
    {
        return $scenes;
    }

    public function favoriteJoke(string $joke): string
    {
        return "The best joke is $joke \n";
    }
}