<?php

    // $x = 5;

    // if($x > 6 || $x % 2 != 0) {
    //     echo 1;
    // } else {
    //     echo 2;
    // }

    // if($x > 6 AND $x % 2 != 0) {
    //     echo 1;
    // } else {
    //     echo 2;
    // }
    // AND &&
    // OR ||


    // if($x > 6 XOR $x % 2 != 0) {
    //     echo 1;
    // } else {
    //     echo 2;
    // }

    // Arrays

    // $arr = [4,8,7,8];
    // echo count($arr);
    // echo $arr[0];
    // echo "<pre>";
    // print_r($arr);
    /*for($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }*/

    // echo $arr[count($arr) - 1];//ktpi zangvaci verjin element@
    

    // $arr = [4,8,7,8];
    // $sum = 0;
    // for($i = 0; $i < count($arr); $i++) {
    //     $sum += $arr[$i];
    // }
    
    // echo $sum;

    // $arr = [4,8,7,8];
    // echo array_sum($arr);
    // echo array_product($arr);

    //1//trvac zangvaci mejic gtnel bacasakan elementner@ ev tpel nranc indexner@
    //2//trvac zangvacic durs berel ayn drakan elementner@ voronc index@ zuyg e
    //3//durs berel ayn indeqner@ voronc elementner@ 3-ov bazmapatkelis kstananq zuyg tiv
    //4//tpel minimum ev ir indexi artadryal@ 



    // 1//trvac zangvaci mejic gtnel bacasakan elementner@ ev tpel nranc indexner@

    /*$arr = [4,-8,7,-8];
    
    for($i = 0; $i < count($arr); $i++) {
       if($arr[$i] < 0) {
        echo $i . " ";
       }
    }*/

    //2//trvac zangvacic durs berel ayn drakan elementner@ voronc index@ zuyg e
    /*$arr = [4,-8,7,-8, 4];
    for($i = 0; $i < count($arr); $i++) {
       if($i % 2 == 0 AND $i != 0) {
            if($arr[$i] > 0) {
                 echo $arr[$i] . " ";
            }
       }
    }*/


    // $arr = [4,5,8,[8,9,7],4,5,8,[4,6,[8,[11]]]];
    // // echo "<pre>";
    // // print_r($arr);
    // echo $arr[7][2][1][0];

    // $arr[7][2][1][0] = "Hello";
    // echo $arr[7][2][1][0];


    // $arr = [
    //     [4,8,9],
    //     [3,2,9],
    //     [4,1,9]
    // ];
    // $arr[0][0]
    // $arr[0][1]
    // $arr[0][2]
    // $arr[1][0]
    // $arr[1][1]
    // $arr[1][2]
    // $arr[2][0]
    // $arr[2][1]
    // $arr[2][2]
 
    // for($i = 0; $i < count($arr); $i++) {
    //     for($j = 0; $j < count($arr[$i]); $j++) {
    //         echo $arr[$i][$j] . "<br>";
    //     }
    // }



//  Asoceativ zangvac

    // $user = array(
    //     "id" => 1, 
    //     "first_name" => "John", 
    //     "last_name" => "Smith"
    // );

    // echo $user['first_name'] ;
    // echo $user['last_name'];

    // echo "<pre>";
    // print_r($user);


// $users = array(
//   array("id" => 1, "first_name" => "John"),
//   array("id" => 2, "first_name" => "Tom"),
//   array("id" => 3, "first_name" => "Eric"),
//   array("id" => 4, "first_name" => "Izabel"),
//   array("id" => 5, "first_name" => "Lukas"),
//   array("id" => 6, "first_name" => "Smbo")
// );

// // echo $users[5]['first_name'];//Smbo
// for ($i=0; $i < count($users); $i++) { 
//     if($users[$i]['id'] == 4 ) {
//         echo $users[$i]['first_name'] . "<br>";
//     }
// }


    // $user = array(
    //     "id" => 1, 
    //     "first_name" => "John", 
    //     "last_name" => "Smith"
    // );

    /*foreach ($user as $key => $value) {
        echo $key . " | " . $value . "<br>";
    }*/

    // foreach ($user as $value) {
    //     echo  $value . "<br>";
    // }

  /*  $users = array(
        array("id" => 1, "first_name" => "John"),
        array("id" => 2, "first_name" => "Tom"),
        array("id" => 3, "first_name" => "Eric"),
        array("id" => 4, "first_name" => "Izabel"),
        array("id" => 5, "first_name" => "Lukas"),
        array("id" => 6, "first_name" => "Smbo")
    );


    echo "<ol>";
        foreach ($users as $value) {
            echo "<li>" . $value['first_name'] . "</li>";
        }
    echo "</ol>";*/

    //   $users = [
    //     array("id" => 1, "first_name" => "John"),
    //     array("id" => 2, "first_name" => "Tom"),
    //     array("id" => 3, "first_name" => "Eric"),
    //     array("id" => 4, "first_name" => "Izabel"),
    //     array("id" => 5, "first_name" => "Lukas"),
    //     array("id" => 6, "first_name" => "Smbo")
    // ];

    // $arr = array(4,7,8,9,11);

    // $arr = [];
    // array_push($arr, 7,8,9,10);
    // foreach ($arr as $key => $value) {
    //     echo $key . " <<>> " . $value . "<br>";
    // }


    // https://www.php.net/manual/ru/language.types.array.php



    // array metods
    // sortavorman bolor metodner@
    // slice, splice, key_exists, each,  list, merge, reverse, key, range, compact, array_walk, unique, assoc metodner, search, replace, reduce, array_rand, array_map, key-eri het ashxatox metodner@, combine


