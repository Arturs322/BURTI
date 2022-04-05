<?php

namespace Burti\classes;

class VarietiesOptions
{
    public function getSize()
    {

        $jsonDecode = json_decode(file_get_contents("sample.json"), true);
        foreach ($jsonDecode['varieties'][0]['options'] as $sizes) {
            echo $sizes['description'] . PHP_EOL;
        }
    }

    public function getColor()
    {

        $jsonDecode = json_decode(file_get_contents("sample.json"), true);
        foreach ($jsonDecode['varieties'][1]['options'] as $color) {
            echo $color['description'] . PHP_EOL;
        }

    }

    public function getShoeSize()
    {

        $jsonDecode = json_decode(file_get_contents("sample.json"), true);
        foreach ($jsonDecode['varieties'][2]['options'] as $sizes) {
            echo $sizes['code'] . PHP_EOL;
        }

    }
}