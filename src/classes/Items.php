<?php

namespace Burti\classes;

class Items
{

    public function getItemsCode($number)
    {
        $jsonDecode = json_decode(file_get_contents("sample.json"), true);
        echo $jsonDecode['items'][$number]['code'];
    }

    public function getItemsDescription($number)
    {
        $jsonDecode = json_decode(file_get_contents("sample.json"), true);
        echo $jsonDecode['items'][$number]['description'];
    }

    public function getSuccessMessage()
    {
        if (isset($_POST['sizeRiga']) && $_POST['colorRiga']) {
            echo $this->getItemsCode(0) . "." . $_POST['colorRiga'] . "." . $_POST['sizeRiga'];
        } else if (isset($_POST['sizeSun'])) {
            echo $this->getItemsCode(1) . "." . $_POST['sizeSun'];
        } else if (isset($_POST['sizeBoots'])) {
            echo $this->getItemsCode(2) . "." . $_POST['sizeBoots'];
        } else if (isset($_POST['sizeSandals']) && $_POST['colorSandals']) {
            echo $this->getItemsCode(3) . "." . $_POST['colorSandals'] . "." . $_POST['sizeSandals'];
        } else if (isset($_POST['colorPen'])) {
            echo $this->getItemsCode(4) . ".";
        }
    }
}
