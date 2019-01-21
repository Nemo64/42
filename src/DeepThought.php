<?php

class DeepThought
{
    public function compute($question)
    {
        $question = substr($question, 0, 10);
        $base = intval($question);
        $n = $base + ($base + 14);
        $n = $n + 70;
        $n = $n / 2;
        $n = $n - $base;
        return $n;
    }
}
