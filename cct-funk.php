<?php
	//****************************************************
	//Cab Code Tech's Collection of their Custom Function!
	//****************LE CCT FUNK*************************
	//****************************************************
	//*****************Neknek-Micden-MJED*******************
	//*****************************************************
	//**Don't forget to put "cct" on the beginning!*******
	//*****************************************************

    //DEFAULT VALUES
    $cct_datenow = date("Y-m-d H:i:s");
    //ALIAS - mysqli_real_escape_string()
    function cct_stresc($cn,$lestring){
        return mysqli_real_escape_string($cn,$lestring);
    }
    //DIVERT W/ NOTICE MESSAGE
    function cct_divert($location,$statusmsg){
        /*
            status message : form_ok,form_nah 
        */
        header("location:".$location.".php?form=".$statusmsg);
    }
    //FORM NOTIFICATION
    function cct_notif($message,$color){
        if($color==1){$class="cn-green";}else if($color==2){$class="cn-red";}else if($color==3){$class="cn-yellow";}else{$class="cn-green";}
        echo "<div class=\"cct-notif ".$class."\">".$message."</div> ";
    }
    //MYSQLI CONNECT
    function cct_con($server,$uname,$pword,$db){
        $GLOBALS["con"] = mysqli_connect($server,$uname,$pword,$db);
        if(mysqli_connect_errno()){
            echo "Can't contact MySQL. Over. : ".mysqli_connect_error();
        }
    }
	
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
    function cct_qqi($con,$query){
        $exe = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($exe)){
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
    function cct_sqi($con,$query){
        $exe = mysqli_query($con,$query);
        return mysqli_fetch_array($exe);
    }
	
	//**------------------------------------------------**
	
	//QUICK MYSQL QUERY WITHOUT RETURN
	function cct_qqwr($query,$connection){
		mysql_query($query,$connection);
	}
    //QUICK MYSQLI QUERY WITHOUT RETURN
    function cct_qwri($con,$query){
        mysqli_query($con,$query);
    }
	
	//**------------------------------------------------**
	
	//QUICK MYSQL COUNT
	function cct_cqq($query,$connection){
		$exe = mysql_query($query,$connection);
		$returnme = mysql_num_rows($exe);
		
		return $returnme;
	}
    //QUICK MYSQLI COUNT
    function cct_qci($con,$query){
        $exe = mysqli_query($con,$query);
        $returnme = mysqli_num_rows($exe);
        if($returnme==NULL){$returnme=0;}
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
	
	//OBJECT PHP
	//$obj = (object) array('foo' => 'bar', 'property' => 'value');
	//echo $obj->foo; // prints 'bar'
	//echo $obj->property; // prints 'value'
	
?>
