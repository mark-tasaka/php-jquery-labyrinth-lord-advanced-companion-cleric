<?php

/*Cleric*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "1,565";
            break;
            
        case 2:
            $xp = "3,125";
            break;
            
        case 3:
            $xp = "6,251";
            break;
            
        case 4:
            $xp = "12,501";
            break;
            
        case 5:
            $xp = "25,001";
            break;
            
        case 6:
            $xp = "50,001";
            break;
            
        case 7:
            $xp = "100,001";
            break;
            
        case 8:
            $xp = "200,001";
            break;
            
        case 9:
            $xp = "300,001";
            break;
            
        case 10:
            $xp = "400,001";
            break;
            
        case 11:
            $xp = "500,001";
            break;
            
        case 12:
            $xp = "600,001";
            break;
            
        case 13:
            $xp = "700,001";
            break;
            
        case 14:
            $xp = "800,001";
            break;
            
        case 15:
            $xp = "900,001";
            break;
            
        default:
            $xp = "";
            
    }
    
    return $xp;
}


function thacoAdjust ($level)
{
    $minusThaco = 1;
    
    if($level >= 4 && $level <= 5)
    {
        $minusThaco = 2;
    }
    else if($level >= 6 && $level <= 8)
    {
        $minusThaco = 3;
    }
    else if($level >= 9 && $level <= 10)
    {
        $minusThaco = 4;
    }
    else if($level == 11)
    {
        $minusThaco = 5;
    }
    else if($level == 12)
    {
        $minusThaco = 6;
    }
    else if($level >= 13 && $level <= 14)
    {
        $minusThaco = 7;
    }
    else if($level >= 15 && $level <= 16)
    {
        $minusThaco = 8;
    }
    
    return $minusThaco;
}


function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 4)
    {
        $save = 16;
    }
    else if($level >= 5 && $level <= 8)
    {
        $save = 14;
    }
    else if($level >= 9 && $level <= 12)
    {
        $save = 12;
    }
    else if($level >= 13 && $level <= 16)
    {
        $save = 8;
    }
    
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 4)
    {
        $save = 11;
    }
    else if($level >= 5 && $level <= 8)
    {
        $save = 9;
    }
    else if($level >= 9 && $level <= 12)
    {
        $save = 7;
    }
    else if($level >= 13 && $level <= 16)
    {
        $save = 3;
    }
    
    return $save;
}

function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 4)
    {
        $save = 14;
    }
    else if($level >= 5 && $level <= 8)
    {
        $save = 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        $save = 10;
    }
    else if($level >= 13 && $level <= 16)
    {
        $save = 8;
    }
    
    return $save;
}


function saveWand ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 4)
    {
        $save = 12;
    }
    else if($level >= 5 && $level <= 8)
    {
        $save = 10;
    }
    else if($level >= 9 && $level <= 12)
    {
        $save = 8;
    }
    else if($level >= 13 && $level <= 16)
    {
        $save = 4;
    }
    
    return $save;
}


function saveSpell ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 4)
    {
        $save = 15;
    }
    else if($level >= 5 && $level <= 8)
    {
        $save = 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        $save = 9;
    }
    else if($level >= 13 && $level <= 16)
    {
        $save = 6;
    }
    
    return $save;
}


?>