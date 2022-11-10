<?php

class Video
{
    private string $title;
    private bool $isCheckedOut = false; // by default should be in inventory
    private float $avgRating = 0;
    public function __construct(string $title) {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getRentalStatus(): bool {
        return $this->isCheckedOut;
    }

    public function getRating(): float {
        return $this->avgRating;
    }

    public function checkOut(): void { // connect with rent_video
        if (!$this->isCheckedOut) {
            $this->isCheckedOut = true;
        }
    }

    public function checkIn(): void { //connect with return_video
        if ($this->isCheckedOut) {
            $this->isCheckedOut = false;
        }
    }

    public function setRating(float $rating): void {
        if ($this->avgRating == 0) {
            $this->avgRating = $rating;
        } else {
            $this->avgRating = ($this->avgRating + $rating)/2;
        }
    }
}

class Application
{
    private array $inventory;

    function run()
    {
        while (true) {

            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            echo "Choose 5 to add a rating to any of our videos\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $videosToAdd = readline('Enter the video titles for videos to add (separate them with a comma) >> ');
                    $videos = explode(',', $videosToAdd);
                    $this->add_movies($videos);
                    break;
                case 2:
                    $videoTitle = readline('Enter video title you wish to rent >> ');
                    echo $this->rent_video($videoTitle) ? "Thank you, enjoy the video!\n" : "Sorry, video not available for rent\n";
                    break;
                case 3:
                    $returnVideoTitle = readline('Enter video title you wish to return >> ');
                    echo $this->return_video($returnVideoTitle) ? "Thank you, come again!\n" : "Sorry, this is not the video you rented\n";
                    $ratingGiven = false;
                    while (!$ratingGiven) {
                        $rating = readline('To help our customers, please rate the video from 1 to 5 >> ');
                        if ($rating < 1 || $rating > 5) {
                            continue;
                        } else {
                            foreach ($this->inventory as $video) {
                                if ($video->getTitle() == $returnVideoTitle) {
                                    $video->setRating($rating);
                                }
                            }
                            $ratingGiven = true;
                        }
                    }
                    break;
                case 4:
                    echo "Videos in our store: " . PHP_EOL;
                    $this->list_inventory($this->inventory);
                    break;
                case 5:
                    $videoToRate = readline('Enter video title you wish to rate >> ');
                    $rating = readline('Enter the rating you would give this video >> ');
                    foreach ($this->inventory as $video) {
                        if ($video->getTitle() == $videoToRate) {
                            $video->setRating($rating);
                        }
                    }
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies(array $videos): void
    {
        foreach ($videos as $video) {
            $video = trim($video);
            $addedVideo = new Video($video);
            $this->inventory [] = $addedVideo;
        }
    }

    private function rent_video(string $videoTitle): bool
    {
        foreach ($this->inventory as $video) {
            if ($videoTitle == $video->getTitle() && !$video->getRentalStatus()) {
                $video->checkOut();
                return true;
            }
        }
        return false;
    }

    private function return_video(string $videoTitle): bool
    {
        foreach ($this->inventory as $video) {
            if ($videoTitle == $video->getTitle() && $video->getRentalStatus()) {
                $video->checkIn();
                return true;
            }
        }
        return false;
    }

    private function list_inventory(array $inventory): string
    {
        foreach ($inventory as $key => $video){
            $rentStatus = (!$video->getRentalStatus()) ? " (available to rent)" : " (rented out)";
            echo "[$key] " . $video->getTitle() . ", average rating: " . $video->getRating() . $rentStatus . PHP_EOL;
        }
        return 'Sorry, no videos in inventory';
    }
}

class VideoStore // this would repeat the functions/methods from application class. Everything is already included there
{
}


$app = new Application(); // can add videos by their titles, can see VideoStore inventory, can rent, return videos, can give rating to videos (at return or separately)
$app->run();
