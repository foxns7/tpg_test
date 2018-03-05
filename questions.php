<?php
    
function star_pattern() {
    
    $star = "*";
    $stars = array();
    $max = 5; 
   

    for ($i = 0; $i < $max; $i++) {
                
        for ($count = 0; $count <= $i; $count++) {
          echo $star;
          if ($count == $i) {
            $stars[] = $star;
          }
           
        }
        echo "\r\n";
       
        for ($count = $max; $count >= 0; $count--) {
            
            if(count($stars) == 5) {
                echo implode($stars);
                echo "\r\n";
            }
            
             if ($i == $max-1) { 
                array_pop($stars);
                echo implode($stars);
                echo "\r\n";
             }  
       }
        
    }
    return;
} 

function sort_array($array) {
    
    sort($array);

    $len = count($array);
    
    for ($i = 0; $i < $len; $i++) {
        
        echo $array[$i];
        echo "\r\n";
    }
    return;
}

function spot_diff($str_1, $str_2) {
    
    $str_1 = str_split($str_1);
    $str_2 = str_split($str_2); 
    $result = array_diff($str_1, $str_2);
    $diff = '';
    
    foreach ($result as $key => $value) {
        echo "\r\n";
        $diff =  "The difference is at position ".$key." which holds the value '".$value."'";
        
    }
   
    echo $diff;
    echo "\r\n";
    return;
}  

function convert_arabic_nums($num) {
   
    $arabic_nums = array('٠'=>'0'
                         ,'١'=>'1'
                         ,'٢'=>'2'
                         ,'٣'=>'3'
                         ,'٤'=>'4'
                         ,'٥'=>'5'
                         ,'٦'=>'6'
                         ,'٧'=>'7'
                         ,'٨'=>'8'
                         ,'٩'=>'9');
    echo "\r\n";
    echo "Arabic number is: ".$num;
    echo "\r\n";
    echo "Roman number is: ".strtr($num, $arabic_nums);
   
    return;
} 

#Question 1
star_pattern();

#Question 2
$array = array('blue','orange','red','yellow','indigo','green');
sort_array($array);

#Question 3
$str_1 = 'football';
$str_2 = 'footboll';

spot_diff($str_1, $str_2);

#Question 4
convert_arabic_nums('٩');

?>
