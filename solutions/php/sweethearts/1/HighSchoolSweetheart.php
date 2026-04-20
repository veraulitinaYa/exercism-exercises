<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
       $name = trim($name);
        return $name[0];
    }

    public function initial(string $name): string
    {
        $s = $this->firstLetter($name) . ".";
        return strtoupper($s);
    }

    public function initials(string $name): string
    {
        $fullNameTrimmed = trim($name);
        $split = explode(' ', $fullNameTrimmed);
        return $this->initial($split[0]) . " " . $this->initial($split[1]); 
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initialsSet = $this->initials($sweetheart_a) . "  +  " . $this->initials($sweetheart_b); 
    $heart = <<<END
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $initialsSet     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
END;
        return $heart;
    }
}
