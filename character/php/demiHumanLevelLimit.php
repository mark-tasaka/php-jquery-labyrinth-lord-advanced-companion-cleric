<?php
/*Fighter Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 8)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 8;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 7)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 7;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 7)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 7;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 5)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 5;
        }
    }
    else if($race === "Half-Orc")
    {
        if($level <= 4)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 4;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>