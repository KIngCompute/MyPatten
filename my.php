<?php

/*
$num=5;
$odd=1;
$noSpace=$num-1;
$k=0;
for($i=1;$i<=$num;$i++)
{   for($j=1;$j<=$noSpace;$j++)
     {
       echo "--";
     }

      
        for($j=1;$j<=$odd;$j++)
        {
            if($j<=$i)
            {
                $k=$k+1;
            }  else {
            
                $k=$k-1;
            }
            
        echo "$k"." ";
        }
        echo "<br>";
        $odd=$odd+2;
        $noSpace=$noSpace-1;
}


--------1 
------2 3 2 
----3 4 5 4 3 
--4 5 6 7 6 5 4 
5 6 7 8 9 8 7 6 5 

/*
$num=9;
$noSpace=$num-1;

for($i=1;$i<=$num;$i++){
             
    for($j=$noSpace;$j>=1;$j--)
    {
        echo "-";
    }
            for($j=1;$j<=$i;$j++)
            {
                echo "$i"." ";
            }
            echo "<br>";
            
            $noSpace=$noSpace-1;
}

--------1 
-------2 2 
------3 3 3 
-----4 4 4 4 
----5 5 5 5 5 
---6 6 6 6 6 6 
--7 7 7 7 7 7 7 
-8 8 8 8 8 8 8 8 
9 9 9 9 9 9 9 9 9 

/*
$num=5;
    for($i=1;$i<=$num;$i++)
    {
        for($j=$i;$j>=1;$j--)
        {
           
              echo "$j";
        }
        echo "<br>";
    }

1
21
321
4321
54321


/*
$num=5;
    for($i=1;$i<=$num;$i++)
    {
        for($j=1;$j<=$num;$j++)
        {
            if($j<=$i)
              echo "$j";
        }
        echo "<br>";
    }



1
12
123
1234
12345

/*

$num=29;
$odd=1;

$spaceNo=$num/2;
for($i=1;$i<=$num;$i++)
{
    for($j=$spaceNo;$j>=1;$j--){
        echo "_";
    }
    
            for($j=1;$j<=$odd;$j++)
            {
                
            echo "*";
            }
         echo "<br>";
       
         if($i<$num/2)
         {
             $odd=$odd+2;
             $spaceNo=$spaceNo-1;
         }else
         {
              $odd=$odd-2;
              $spaceNo=$spaceNo+1;
         }

}

output:
    
    
______________*
_____________***
____________*****
___________*******
__________*********
_________***********
________*************
_______***************
______*****************
_____*******************
____*********************
___***********************
__*************************
_***************************
*****************************
_***************************
__*************************
___***********************
____*********************
_____*******************
______*****************
_______***************
________*************
_________***********
__________*********
___________*******
____________*****
_____________***
______________*







/*
$num=5;

for($i=1;$i<=$num;$i++)
{

     for($j=1;$j<=$num;$j++)
     {
        if($j<$i)
        {
         echo "-";
        }  else {
         echo "*";     
        }
     }
     echo "<br>";
}

output:
    
*****
-****
--***
---**
----*


/*
$num=5;

for($i=1;$i<=$num;$i++)
{

     for($j=$num;$j>=1;$j--)
     {
        if($j>=$i)
       echo "*";
     }
     echo "<br>";
}

Output:
    
*****
****
***
**
*
  
  
 
*/


/*
$num=9;

for($i=1;$i<=$num;$i++)
{
        for($j=$num;$j>=1;$j--)
        {
            if($j>$i)
            {
                echo "_";
            }
            else{
                 echo "*";
            }
        }
        echo "<br>";
}

O/p


                       *
                      **
                     ***   
                    ****
                   *****
  







*/
/*
$num=4;

for($j=1;$j<=$num;$j++)
{
        for($i=1;$i<=$num;$i++){
            if($i<=$j)
            {
            echo "*";
            }
        }
        echo "<br>";
}


output
 
  *
  **
  ***
  ****
  *****


*/
/*$num=5;

for($i=1;$i<=$num;$i++)
{
echo "*";
} 
echo "<br>";


for($j=1;$j<=$num-2;$j++)
{
        for($i=1;$i<=$num;$i++)
        {
            if($i==1 || $i==$num)
            {
                echo "*";
            }  else {
               echo "#"; 
            }

        } 
        echo "<br>";
}
for($i=1;$i<=$num;$i++)
{
echo "*";
} 
echo "<br>";
 
 o/p:
 *****
 *   *
 *   *
 *   *
 *****
 
 * other Example
*/

/*
$num=5;

for ($i=1;$i<=$num;$i++){
    for($j=1;$j<=$num;$j++)
    {
        
        if($i==1 || $i==$num || $j==1 || $j==$num){
           echo "*"; 
        }  else {
           echo "#"; 
        }
     
    }
    echo "<br>";
}
*/


