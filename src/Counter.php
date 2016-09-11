<?php

namespace EnriqueSegura;


class Counter
{
    private $numbers = array();
    public function getCounter()
    {
        return $this->numbers;
    }

    public function count($number)
    {
        if(isset($this->numbers[$number])){
            $this->numbers[$number]++;
        }else{
            $this->numbers[$number] = 1;
        }
    }
}