<?php

trait FilmReview
{
    public function calcRating(array $ratings): float|int
    {
        return array_sum($ratings)/count($ratings);
    }

    public function isRecommend(float|int $rating): string
    {
        if($rating < 3) {
            return "Film is not recommended!\n";
        }

        return "Film is recommended!\n";
    }

    public function displayReview(string $title, float $rating, $recommendation): void
    {
        echo "Review for $title:\n Rating: $rating\n $recommendation\n";
    }
}