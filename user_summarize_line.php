<?php
	
	// require('../init.php');

	// $username = $_GET['username'];

	// $db       = new db_sql_functions();

 //    $oneweekTimeCircleArray = $db->get_oneweek_time_circle($username); 

	// $oneweekTimeLineArray  =  $db->get_oneweek_time_line();

	// $mergeArray = Array();
	
	// array_push($mergeArray, $oneweekTimeCircleArray,$oneweekTimeLineArray);

	// $tempArray['data'] = $mergeArray;
	// $mergeJSON = json_encode($tempArray,JSON_UNESCAPED_UNICODE);

	header("Content-type: text/html; charset=utf-8"); 
	$arr['data'] = array(
		array(
			array("nickname"=>"强薇","date"=>"05-30","sum_long"=>8.43),
			array("nickname"=>"强薇","date"=>"06-01","sum_long"=>9.63),
			array("nickname"=>"强薇","date"=>"06-03","sum_long"=>8.29),
			array("nickname"=>"强薇","date"=>"06-04","sum_long"=>4.40),

		),
		array(
			array("nickname"=>"何家豪","date"=>"05-30","sum_long"=>8.00),
			array("nickname"=>"何家豪","date"=>"06-01","sum_long"=>7.99),
		),
		array(
			array("nickname"=>"齐玥","date"=>"06-01","sum_long"=>2.78),
			array("nickname"=>"齐玥","date"=>"06-02","sum_long"=>14.49),
			array("nickname"=>"齐玥","date"=>"06-03","sum_long"=>20.06),

		),
		array(
			array("nickname"=>"郭一欢","date"=>"06-02","sum_long"=>9.43),
			array("nickname"=>"郭一欢","date"=>"06-03","sum_long"=>4.43),
			array("nickname"=>"郭一欢","date"=>"06-04","sum_long"=>9.00),

		), 
		array(
			array("nickname"=>"师凡","date"=>"06-01","sum_long"=>6.78),
			array("nickname"=>"师凡","date"=>"06-02","sum_long"=>7.49),
			array("nickname"=>"师凡","date"=>"06-03","sum_long"=>20.06),

		),

		);

	echo json_encode($arr,JSON_UNESCAPED_UNICODE);


	// {"data":
		// 	[
		// 		[
		// 			{"nickname":"强薇","date":"05-15","sum_long":8.43},
		// 			{"nickname":"强薇","date":"05-16","sum_long":9.63},
		// 			{"nickname":"强薇","date":"05-17","sum_long":8.29},
		// 			{"nickname":"强薇","date":"05-18","sum_long":4.4}
		// 		],
		// 		[],
		// 		[
		// 			{"nickname":"齐玥","date":"05-16","sum_long":2.78},
		// 			{"nickname":"齐玥","date":"05-18","sum_long":14.49},
		// 			{"nickname":"齐玥","date":"05-21","sum_long":20.06}
		// 		],
		// 		[
		// 			{"nickname":"郭一欢","date":"05-18","sum_long":9.43},
		// 			{"nickname":"郭一欢","date":"05-19","sum_long":4.43},
		// 			{"nickname":"郭一欢","date":"05-21","sum_long":9}
		// 		]
		// 	]
		// }
?>



