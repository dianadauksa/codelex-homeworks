<?php
class Movie {
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public static function getPG(array $movies): array { //could not set type as Movie[]
        $PGMovies = [];
        foreach($movies as $movie) {
            if ($movie->rating === 'PG') {
                $PGMovies[] =  $movie;
            }
        }
        return $PGMovies;
    }
}
$movies = [];
$movies[] = new Movie('Casino Royale', 'Eon Productions', 'PG13');
$movies[] = new Movie('Glass', 'Buena Vista International', 'PG13');
$movies[] = new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG');
foreach (Movie::getPG($movies) as $movie) {
    echo $movie->getTitle(); // Spider-Man only here
}