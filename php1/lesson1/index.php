<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>

	<?php 
		// $first_name = "John";
		// $user_age = 25;
		//echo $first_name;
		// echo "Welcome " . $first_name . ", Your age " . $user_age;

		// echo "Welcome $first_name, Your age $user_age";
		// echo 'Welcome $first_name, Your age $user_age';

		// Types
		// integer - amboxj tver
		// float - tasnordakan tver
		// double - sahox storaketov tver
		// string - teqst
		// bool - true/false, 1/0(0-i depqum datarkutyuna cuyc talis)
		// null 
		// 1//erb popoxakanin veragrvum e null, or` $x = null;
		// 2//erb popoxakanin veragrum enq 0 arjeq@
		// 3//erb popoxakanin veragrum enq "" arjeq@
		// 4//erb haytararvac popoxakan@ jnjvum e unset funkciayi mijocov
		// array - zangvacner
		// object - obyekt
		// resource - 

		//Matematikakan operatorner
		// + gumarum
		// - hanum
		// * bazmapatkum
		// / bajanum
		// % mnacordov bajanum
		/*echo 5 / 2; // 2.5
		echo 5 % 2; // 1*/

		// Matematikakan gorcoxutyunner
		// $x = 5;
		// $x = $x + 5; 
		// $x += 5;
		// $x -= 5;
		// $x *= 5;
		// $x /= 5;

		// echo $x;

		//Hamematakan operatorner
		// >
		// <
		// >=
		// <=
		// ==
		// ===
		// !=
		// !==
		// !

		// increment ev decriment
		// ++ avelanuma mekov, -- pakasuma mekov
		// $x++ postincrement
		// ++$x preincrement
		// $x = 1;
		/*echo $x++ . "<br>";
		echo $x;*/

		/*echo ++$x . "<br>";
		echo $x;*/


		// echo 5 < 4;

	// Popoxakanneri het  ashxatox funkcianer

	// $x = "";
	// $x = 5;

	/*unset($x); // jnjum e trvac popoxakan@
	echo $x; */

	// echo isset($x);// stuguma popoxakan@ goyutyun uni te voch, ete ayo kveradarcni 1, ete voch kveradarcni 0,


	// echo empty($x);// stuguma popoxakan@ datarka  te voch, ete ayo kveradarcni 1, ete voch kveradarcni 0,

	// echo is_int(5.5);//stuguma popoxakani tip@, integera- te voch
	// echo is_float(5.5);//stuguma popoxakani tip@, floata te voch
	// echo is_double(5.5);//stuguma popoxakani tip@, DOUBLE  te voch
	// echo is_string(5.5);//stuguma popoxakani tip@, stringa, te voch
	// echo is_null(5.5);//stuguma popoxakani tip@, null, te voch
	// echo is_object(5.5);//stuguma popoxakani tip@, object- te voch
	// echo is_resource(5.5);//stuguma popoxakani tip@, resurce- te voch
	// echo is_array(5.5);//stuguma popoxakani tip@, array- te voch

	// echo is_file("js/main.js");//stuguma trvac@ fayl e te voch

	// echo is_dir("js");//stuguma papkaya te voch
	// @mkdir("images");//stexcuma folder
	// rmdir("images");//jnjuma folder@ ete datarka
	// copy("css/style.css", "main.css");//copy-a anum fayl@, 1-in parametr@ patjenvox fayli kam folder-i anunna, 2-rd@ ayn texi anun@ vortex petqa texadsrevi nor fayl@
	// rename("css/style.css", "css/main.css");//poxuma trvac fayli kam papkayi anun@, 1-in parametr@ naxkin anunna, 2-rd parametr@ nor anun@

	

	/*$x = 5;
	if($x % 2 != 0) {
		echo "Ok";
	}*/

	
	/*$x = 4;
	if($x % 2 != 0) {
		echo "Ok";
	} else {
		echo "Faild";
	}*/

	// if else if else paymani operator

	/*$x = 7;
	if($x % 2 != 0) {
		echo 1;
	} elseif($x > 6) {
		echo 2;
	} else if($x < 4) {
		echo 3;
	} else {
		echo "None";
	}*/

	// switch case\
	// $x = 5; 
	// switch ($x) {
	// 	case 5:
	// 		echo 1;
	// 		break;
	// 	case "dfdf":
	// 		echo 2;
	// 		break;
	// 	default:
	// 		echo "none";
	// 		break;
	// }


	?>
	</h1>
	<script src="js/main.js"></script>
</body>
</html>