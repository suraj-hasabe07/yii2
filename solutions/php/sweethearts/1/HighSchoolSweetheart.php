<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return mb_substr(trim($name),0,1);
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)).".";
    }

    public function initials(string $name): string
    {
        $names = explode(" ",$name);
        $firstNameIntial = $this->initial($names[0]);
        $lastNameIntial = $this->initial($names[1]);
        return $firstNameIntial." ".$lastNameIntial;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initialsA = $this->initials($sweetheart_a);
        $initialsB = $this->initials($sweetheart_b);
        $heart =
"     ******       ******\n" .
"   **      **   **      **\n" .
" **         ** **         **\n" .
"**            *            **\n" .
"**                         **\n" .
"**     $initialsA  +  $initialsB     **\n" .
" **                       **\n" .
"   **                   **\n" .
"     **               **\n" .
"       **           **\n" .
"         **       **\n" .
"           **   **\n" .
"             ***\n" .
"              *";
            
            
            
            
            

        return $heart;
    }
}
