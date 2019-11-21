<?php
    if(isset($_POST['login'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
        if($user=="Loc" && $pass=="12345"){
            echo "<font color='blue'>Welcome to, admin</font>";
        }else{
            echo "<font color='red'>Not login</font>";
        }
        echo "<br>";
	    }
	    if($_POST["body"]==null){
	    	echo "<font color='red'>xin nhập lại body</font>";
	    }
	    else{
	    	echo $_POST["body"];
	    echo "<br>";
	    if($_POST["note"]==null){
	    	echo "<font color='red'>xin nhập lại Note</font>";
	    }
	    else{
	    	echo $_POST["note"];
	    }
	}
?>