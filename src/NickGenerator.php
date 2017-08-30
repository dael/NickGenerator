<?php
namespace Dael\NickGenerator;


class NickGenerator
{
    function __construct()
    {
        $this->makeNick();
    }

    public function makeNick()
    {
        $chooseAdj = new Choose('ADJ.txt');
        $chooseN = new Choose('N.txt');

        return $chooseAdj->getWord() . $chooseN->getWord();
    }
}