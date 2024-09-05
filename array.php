<?php

    $fruits = ["banana","appale","cherry", "orange","mango"];
    
    // index array
    echo $fruits[3]."\n";
    echo $fruits[0] ."\n";
    
    //asociative aray --> these array used named key to access their elements instead of numeric indicates
    $ages = array("omkar"=>25, "shubham"=>23,"rohan"=>30);
    echo $ages["omkar"] ."\n";
    echo $ages["rohan"] ."\n";

    // multidimentional array
        $matrix = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
        );
        echo $matrix[1][2]."\n";

        $demoarray = ["omkar",0];
        echo $demoarray[0] ."\n";
        echo $demoarray[1]."\n";

    // adding element --> you can add new element to an array by specifying 
                    //    a new index/key orleaving it blane to append at the end
    $fruits[]="grapes";
    echo $fruits[5]."\n";

    //removing element
    echo $fruits[1]."\n";
    unset($fruits[1]);
    //echo $fruits[1]."\n"; --> //Warning: Undefined array key
    
    // for each loop

    $fruits = ["apple", "banana", "cherry"];
    foreach($fruits as $fruit){
        echo $fruit. "\n";
    }

    $arr1 = array("Apple","Dog","Rose");

    list($a,$b,$c) = $arr1;
    echo $a."\n";
    echo $b."\n";
    echo $c."\n";

    $arr2 = array("Apple","Dog","Rose");
    list(, ,$c) = $arr1;
    echo $c."\n";

    $arr = array ("apple",array("Dog","Rose"));
    list($a,list($b,$c)) = $arr;

    $temp = array
    (
        array("Id","Name","Salary"),
        array(1,"sonoo",400000),
        array(2,"john",3500000),
        array(3,"omkar",60000)
    );

    for($i=0; $i<count($temp) ; $i++){
        for($j=0; $j< count($temp[0]) ;$j++){
            echo $temp[$i][$j]." ";
        }
        echo "\n";
    }

    // echo $temp[0][0]." ",$temp[0][1]," ",$temp[0][2],"\n";

?>
