<?php
	//****************************************************
	//Cab Code Tech's Collection of their Custom Function!
	//****************LE CCT FUNK*************************
	//****************************************************
	//*****************Neknek-Micden-MJED*******************
	//*****************************************************
	//**Don't forget to put "cct" on the beginning!*******
	//*****************************************************
	
	//TWO DECIMAL PLACES
	function cct_twodecimal($lestring){
		return number_format(intval($lestring),2,".",""); 
	}
	//SAMPLE
	//$lesample = "12.345";
	//echo cct_twodecimal($lesample);
	
	//**------------------------------------------------**
	
	//GET PRETTY URL VARIABLE
	function cct_purlv($requesturi,$predeflink){
		//GET THE CUSTOM QUERY OF USER
		$getv = explode("/",$requesturi);
		//COUNT THE VARIABLE
		$countv = count($getv);
		//COUNT THE PRE-DEFINED LINK (EXISTING)
		$i = $predeflink;
		//CREATE AN ARRAY
		while($i < $countv){
			$variable[] = $getv[$i];
			$i++;
		}
		//RETURN IT
		return $variable;
	}
	
	//**------------------------------------------------**
	
	//QUICK MYSQL QUERY WITH MULTIPLE RETURN
	function cct_qq($query,$connection){
		$exe = mysql_query($query,$connection);
		while($row = mysql_fetch_array($exe)){
			$returnme[] = $row;
		}
		
		return $returnme;
	}
	
	//**------------------------------------------------**
	
	//QUICK MYSQL QUERY WITH SINGLE ROW RETURN
	function cct_sqq($query,$connection){
		$exe = mysql_query($query,$connection);
		return mysql_fetch_array($exe);
	}
	
	//**------------------------------------------------**
	
	//QUICK MYSQL QUERY WITHOUT RETURN
	function cct_qqwr($query,$connection){
		mysql_query($query,$connection);
	}
	
	//**------------------------------------------------**
	
	//QUICK MYSQL COUNT
	function cct_cqq($query,$connection){
		$exe = mysql_query($query,$connection);
		$returnme = mysql_num_rows($exe);
		
		return $returnme;
	}
	
	//**------------------------------------------------**
	
	//SQL INJECT SECURITY
	function cct_mysqlsec($thevalue){
		return mysql_real_escape_string($thevalue);
	}
	
	//SQL INJECT SECURITY 2
	function cct_s($thevalue){
		return mysql_real_escape_string($thevalue);
	}
	
	//**------------------------------------------------**

	//PDO WITH RETURN (ARRAY)
	function cct_qqpdo($query,$connection){
		foreach($connection->query($query) as $row){
			$returnme[] = $row;
		}
		
		return $returnme;
	}
	
?>
