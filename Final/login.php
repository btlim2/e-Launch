
<?php
require 'php/connect.inc.php';
?>

<?php
//插入连接数据库的相关信息

//开启一个会话
session_start();

$error_msg = "";
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(!isset($_SESSION['user_id'])){
	//console.log("haha");
	//echo "hah";
    if(isset($_POST['submit'])){//用户提交登录表单时执行如下代码
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
       	//$user_email = mysqli_real_escape_string($dbc,trim($_POST['email']));
        //$user_password = mysqli_real_escape_string($dbc,trim($_POST['password']));
        //echo "hah";
        //console.log("haha");
        $email = $_POST['email'];
	    $password = $_POST['password'];
        if(!empty($email)&&!empty($password)){
            //MySql中的SHA()函数用于对字符串进行单向加密
            $query = "SELECT * FROM user_elaunch WHERE email = '$email' AND password = '$password'";
            //用用户名和密码进行查询
            $data = mysqli_query($dbc,$query);
            //若查到的记录正好为一条，则设置SESSION，同时进行页面重定向
            //if($data ===false){
          //  	var_dump(mysql_error());
           // }
           // else{
	            if(mysqli_num_rows($data)==1){
	                $row = mysqli_fetch_array($data);
	                $_SESSION['user_id']=$row['user_id'];
	                $_SESSION['username']=$row['name'];
	                $home_url = 'indexlogin.php';
	                header('Location: '.$home_url);
	            }else{//若查到的记录不对，则设置错误信息
	                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
	                //echo $error_msg;
	                echo "<script type='text/javascript'>alert('Sorry, you must enter a valid username and password to log in.'); history.go(-1);</script>";
	            }
	        //}
        }else{
            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
    }
}else{//如果用户已经登录，则直接跳转到已经登录页面
    $home_url = 'indexlogin.php';
    header('Location: '.$home_url);
    ession_destroy();
}

	
?>