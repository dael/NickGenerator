<?php
namespace Dael\NickGenerator;


class Choose
{
    private $dictionaryFilename;

    private $dictionaryPath;

    private $data = [];

    function __construct($dictionaryFilename)
    {
        $this->dictionaryFilename = $dictionaryFilename;
        $this->dictionaryPath = dirname((new \ReflectionClass(static::class))->getFileName(),2) .
            DIRECTORY_SEPARATOR . 'dictionary' . DIRECTORY_SEPARATOR;

        $fileData = function($filePath) {
            $fileHandle = fopen($filePath, "r");
            while (($line = fgets($fileHandle)) !== false) {
                yield trim($line);
            }
            fclose($fileHandle);
        };

        foreach ($fileData($this->dictionaryPath. $this->dictionaryFilename) as $data) {
            $this->data[] = $data;
        }

    }

    public function getWord()
    {
        $randIdx = rand(0, count($this->data)-1);
        return $this->data[$randIdx];
    }
}