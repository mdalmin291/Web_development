<?php
/**
 * Created by PhpStorm.
 * User: mdala
 * Date: 30-Sep-20
 * Time: 1:08 PM
 */

namespace App\classes;


class practise
{

    public function makesPractise(){

         $result = [];
        $data = (object)$_POST;
        if( $i = $data->startingNumber < $data->endingNumber){
            if ($data-> choice == 'Odd'){
                for($i = $data->startingNumber; $i <= $data->endingNumber; $i++){
                    if($i % 2 !== 0){
                         $result = $i.' ';
                    }

                }
            }elseif ($data->choice ==  'even'){
            for ($i = $data->startingNumber; $i<= $data->endingNumber;$i++){
                if ($i % 2 == 0){
                     $result = $i.' ';
                }


             }

            }


    }else{
            for($i=$data->startingNumber; $i>= $data->endingNumber; $i-- ){
                echo $result = $i.' ';
            }
        }
        return $_POST;

}


public function totalString(){

      $data = (object)$_POST;
      $givenNumber = $data->givenNumber;
      $result = [];
      $result['total_word'] = str_word_count($givenNumber);
      $result['total_character'] = strlen($givenNumber);

      return $result;

}


}