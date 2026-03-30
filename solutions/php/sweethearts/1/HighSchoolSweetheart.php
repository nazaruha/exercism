<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return mb_ltrim($name)[0];
    }

    public function initial(string $name): string
    {
        return mb_strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $separatedName = explode(' ', $name, 2);
        return $this->initial($separatedName[0]) . ' ' . $this->initial($separatedName[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials = "{$this->initials($sweetheart_a)}  +  {$this->initials($sweetheart_b)}";
        
        return <<<HEART
             ******       ******
           **      **   **      **
         **         ** **         **
        **            *            **
        **                         **
        **     $initials     **
         **                       **
           **                   **
             **               **
               **           **
                 **       **
                   **   **
                     ***
                      *
        HEART;
    }
}
