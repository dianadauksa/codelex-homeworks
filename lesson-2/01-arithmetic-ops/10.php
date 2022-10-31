<?php

class Geometry {

    public static function main() {
        echo "Welcome to Codelex Geometry calculator:\n";
        echo "[1] Calculate the Area of a Circle\n";
        echo "[2] Calculate the Area of a Rectangle\n";
        echo "[3] Calculate the Area of a Triangle\n";
        echo "[4] Quit\n";
        $response = intval(readline("Enter your choice (1-4) >> "));
        if ($response < 1 || $response > 4) {
            echo "Error! Invalid choice. Try again.\n";
            exit;
        }

        switch($response) {
            case 1:
                $radius = readline("Enter the radius of the Circle >> ");
                echo "The area of your Circle is: " . self::getAreaCircle($radius) . PHP_EOL;
                break;
            case 2:
                $length = readline("Enter the length of the Rectangle >> ");
                $width = readline("Enter the width of the Rectangle >> ");
                echo "The area of your Rectangle is: " . self::getAreaRectangle($length, $width) . PHP_EOL;
                break;
            case 3:
                $baseLength = readline("Enter the base length of the Triangle >> ");
                $height = readline("Enter the height of the Triangle >> ");
                echo "The area of your Triangle is: " . self::getAreaTriangle($baseLength, $height) . PHP_EOL;
                break;
            case 4:
                echo "Bye!\n";
                exit;
        }
    }
    public static function getAreaCircle ($radius)
    {
        if($radius <0) {
            echo "Error! Negative values entered.\n";
        } else {
            return round(pi() * $radius ** 2, 2);
        }
    }

    public static function getAreaRectangle($length, $width)
    {
        if($length < 0 || $width <0) {
            echo "Error! Negative values entered.\n";
        } else {
            return round($length * $width, 2);
        }
    }

    public static function getAreaTriangle($baseLength, $height)
    {
        if($baseLength < 0 || $height <0) {
           echo "Error! Negative values entered.\n";
        } else {
            return round($baseLength * $height * 0.5, 2);
        }
    }
}

Geometry::main();
