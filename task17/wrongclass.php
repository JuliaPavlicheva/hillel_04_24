<?php

class horror //Неправильно названий клас
{
    use FilmReview;

    private string $title;
    private string $director;
    private int $year;

    public function __construct(string $title, string $director, int $year){ //дужки з нового рядка
        $this->title = $title;$this->director = $director;$this->year = $year; //не можна писати в один рядок
    }

    public function Culmination(string $culminationTime) : string{return "$culminationTime - culmination";
        //неправильна назва методу, фігурна дужка має бути перенесена на наступний рядок,
        // тіло методу також треба перенести ще на рядок
    }

    public function monster_meeting(string $monster) : string{
        //неправильна назва методу, фігурна дужка має бути перенесена на наступний рядок
        return "Monster is $monster";
    }
}

?> //закритий тег