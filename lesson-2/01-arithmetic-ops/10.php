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
                $radius = intval(readline("Enter the radius of the Circle >> "));
                if ($radius < 0 || $radius == null) {
                    echo "Error! Negative (or not a number) values entered.\n";
                } else {
                    echo "The area of your Circle is: " . self::getAreaCircle($radius) . PHP_EOL;
                }
                break;
            case 2:
                $length = intval(readline("Enter the length of the Rectangle >> "));
                $width = intval(readline("Enter the width of the Rectangle >> "));
                if($length < 0 || $width < 0 || $length == null || $width == null) {
                    echo "Error! Negative (or not a number) values entered.\n";
                } else {
                    echo "The area of your Rectangle is: " . self::getAreaRectangle($length, $width) . PHP_EOL;
                }
                break;
            case 3:
                $baseLength = intval(readline("Enter the base length of the Triangle >> "));
                $height = intval(readline("Enter the height of the Triangle >> "));
                if($baseLength < 0 || $height < 0 || $baseLength == null || $height == null) {
                    echo "Error! Negative (or not a number) values entered.\n";
                } else {
                    echo "The area of your Triangle is: " . self::getAreaTriangle($baseLength, $height) . PHP_EOL;
                }
                break;
            case 4:
                echo "Bye!\n";
                exit;
        }
    }
    public static function getAreaCircle (int $radius): float
    {
        return round(pi() * $radius ** 2, 2);
    }

    public static function getAreaRectangle(int $length, int $width): float
    {
        return round($length * $width, 2);
    }

    public static function getAreaTriangle(int $baseLength, int $height): float
    {
        return round($baseLength * $height * 0.5, 2);
    }
}

Geometry::main();
