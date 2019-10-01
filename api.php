//ADAN NIMA DIRIYE
//P15/101917/2017
<?php
class Sum
{
    // Constructor
    public function __construct(){
        
    }
    
    // Destructor
    public function __destruct(){
    
    }
//function to get sum
     function sum ($i , $j){

        $sum =   $i + $j  ;

        return $sum ;

    }
//function to convert to xml
    function createXml($sum) {

        $response = '<?xml version="1.0" encoding="utf-8"?>';
        $response .= '<response><sum>'.$sum.'</sum>';
    
                $response = $response.'</response>';
                return $response;
     }
}
 
// Create a new object
$obj = new Sum;
 $sum = $obj->sum($_GET['x'],$_GET['y']);
 header("Content-type: text/xml; charset=utf-8");
 echo $obj->createXml($sum);

// Destroy the object
unset($obj);
 
?>
