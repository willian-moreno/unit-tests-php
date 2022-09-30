<?php

declare(strict_types=1);

namespace Src\Utils;

final class ConstructClassBody
{
    private $arr;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    public function generateAttributes(): string
    {
        $result = "";

        foreach ($this->arr as $value) {
            $result .= "private \$$value;\r\n";
        }

        return $result;
    }

    public function generateGetters(): string
    {
        $result = "";

        foreach ($this->arr as $value) {
            $result .= "public function get" . ucfirst($value) . "() {return \$this->$value;}\r\n";
        }

        return $result;
    }

    public function generateSetters(): string
    {
        $result = "";

        foreach ($this->arr as $value) {
            $result .= "public function set" . ucfirst($value) . "(\$$value) {\$this->$value = \$$value;}\r\n";
        }

        return $result;
    }
}
