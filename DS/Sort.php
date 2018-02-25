<?php
/**
*SORTING PERFORMANCE ORDER
*1) insertionSort
*2) slectionSort
*3) bubbleSort
**/
class sorting {

  public $input = array();

  public function __construct(array $inputData){
      $this->input = $inputData;
  }

  public function bubbleSort(){
    //AT the end of each ittraion move higghest value to the end
    $data = $this->input;
    $count = count($data);
    //n-1
    for($i=0; $i<$count-1; $i++){
        //0 to n-1-$i
        for($j=0; $j<$count-1-$i; $j++){
          if($data[$j]>$data[$j+1]){
            $temp = $data[$j];
            $data[$j] = $data[$j+1];
            $data[$j+1] = $temp;
          }
        }
    }
    return $data;
  }

  public function slectionSort(){
    //AT the end of each ittraion move lowest value to the start of array
    $data = $this->input;
    $count = count($data);
    for($i=0; $i<$count-1; $i++){
      $smallestIndex = $i;
      for($j=$i+1; $j<$count; $j++){
        if($data[$smallestIndex] > $data[$j]){
          $smallestIndex = $j;
        }
      }
      if($i<>$smallestIndex){
        $temp = $data[$smallestIndex];
        $data[$smallestIndex] = $data[$i];
        $data[$i] = $temp;
      }
    }
    return $data;
  }

  public function insertionSort(){
    //Pick element from left and compare with left array and place as per sorting of arrays
    $data = $this->input;
    $count = count($data);
        /*
        for($i=0; $i<$count; $i++){
        $changed = 0;
        //$temp = $data[$i+1];
        $temp = $data[$i+1];
        for($j=$i; $j>=0; $j--){
          if($temp<$data[$j]){
            $changed = 1;
            $index = $j;
            $data[$j+1] = $data[$j];
          }else{
            break;
          }
        }
        if($changed){
          $data[$index] = $temp;
        }*/
    for($i=0; $i<$count; $i++){
        $current = $data[$i];
        $j=$i-1;
        while ($j>=0 && $data[$j]>$current) {
          $data[$j+1] = $data[$j];
          $j--;
        }
        $data[$j+1] = $current;
    }

    return $data;
  }

  public function preArr(array $arr){
    echo '<pre>'; print_r($arr);
  }
}
$data = array(12,7,8,12,13,5);
$obj = new sorting($data);
$obj->preArr($obj->bubbleSort());
$obj->preArr($obj->slectionSort());
$obj->preArr($obj->insertionSort());
 ?>
