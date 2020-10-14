<?php
/**
 * Created by PhpStorm.
 * User: mdala
 * Date: 29-Sep-20
 * Time: 2:44 PM
 */

namespace App\classes;


class Series
{
    public function Createseries()
    {
        // $result veriable for object
        // $result = ' ';

        // $result variable for array
        $result = [];
        //$data = (object)$_POST;

        $data = (object)$_POST;
        if ($i = $data->startingNumber < $data->endingNumber) {

            if ($data->choice == 'odd') {
                for ($i = $data->startingNumber; $i <= $data->endingNumber; $i++) {
                    //$result.= $i.' ';
                    if ($i % 2 != 0) {
                        array_push($result, $i . ' ');
                    }

                }

            } elseif ($data->choice == 'Even') {
                for ($i = $data->startingNumber; $i <= $data->endingNumber; $i++) {
                    //$result.= $i.' ';
                    if ($i % 2 == 0) {
                        array_push($result, $i . ' ');
                    }
                }
            }

        } else {

       /*     for ($i = $data->startingNumber; $i>= $data->endingNumber; $i--) {
                //$result.= $i.' ';

                if ($data->choice == 'odd') {
                    for ($i = $data->startingNumber; $i >= $data->endingNumber; $i--)
                        if ($i % 2 != 0) {
                            array_push($result, $i . ' ');
                        }
                } elseif ($data->choice == 'Even') {
                    for ($i = $data->startingNumber; $i >= $data->startingNumber; $i--)
                        if ($i % 2 == 0) {
                            array_push($result, $i . ' ');
                        }
                }
            }

            return $result;*/
        }
    }

// array r index total_word like kore likte hbe.
    public function findWordCharacter(){
         $data =(object)$_POST;
         $givenNumber = $data->givenNumber;
         $result = [];
         $result['total_Word'] = str_word_count($givenNumber);
         $result['total_Character']= strlen($givenNumber);

         return $result;
    }
}