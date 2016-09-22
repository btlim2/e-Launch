<?php
require 'connect.inc.php';
?>

<?php
//插入连接数据库的相关信息

//开启一个会话
session_start();

//$error_msg = "";
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(!isset($_SESSION['user_id'])){
	//console.log("haha");
	//echo "hah";
    if(!empty($_POST['name_signup'])){//用户提交登录表单时执行如下代码
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
       	//$user_email = mysqli_real_escape_string($dbc,trim($_POST['email']));
        //$user_password = mysqli_real_escape_string($dbc,trim($_POST['password']));
        //echo "hah";
        //console.log("haha");
        $name = $_POST['name_signup'];
        $email = $_POST['email_signup'];
	    $password = $_POST['password_signup'];
       // if($name=="" || $email=="" || $password=="")
            // {  
          //  echo "<script>alert('Check the information integrety please！'); history.go(-1);</script>";  
         //   } 
       // else{
            //$query_numOfUser = "SELECT * FROM user_elaunch";
            //$data_numOfUser = mysqli_query($dbc,$query_numOfUser);
           // $numOfUser = mysqli_num_rows($data_numOfUser);
            //$nextUser_id = $numOfUser+1; 
            $query_userReduplication= "SELECT * from user_elaunch where name='$name' or email='$email'";
            $data_userReduplication = mysqli_query($dbc,$query_userReduplication);
            $num_userReduplication = mysqli_num_rows($data_userReduplication);
            if($num_userReduplication)
            {
                echo "<script>alert('User name or Email Address existed'); history.go(-1);</script>";
            }
            else{
                $sql_insert = "insert into user_elaunch (user_id,name,email,password) values('null','$name','$email','$password')";
                $res_insert = mysqli_query($dbc,$sql_insert); 
                if($res_insert)  
                    {  
                    //echo "<script>alert('Sign up successfully!'); history.go(-1);</script>";  
                    $query = "SELECT * FROM user_elaunch WHERE email = '$email' AND password = '$password'";
                //用用户名和密码进行查询
                    $data = mysqli_query($dbc,$query);
                    if(mysqli_num_rows($data)==1){
                        $row = mysqli_fetch_array($data);
                        $_SESSION['user_id']=$row['user_id'];
                        $_SESSION['username']=$row['name'];
                        $home_url = '../indexlogin.php';
                        header('Location: '.$home_url);
                        }else{//若查到的记录不对，则设置错误信息
                            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
                            //echo $error_msg;
                            echo "<script type='text/javascript'>alert('Sorry, you must enter a valid username and password to log in.');</script>";
                        }
                    }  
                    else  
                    {  
                        echo "<script>alert('Error Try it later'); history.go(-1);</script>";  
                    }  
                }
        }
        else  
        {  
            echo "<script>alert('Error Try it later'); history.go(-1);</script>";  
        } 
    }
    //}
    else{//如果用户已经登录，则直接跳转到已经登录页面
    $home_url = '../index.html';
    //error to tell can't login, DO IT!
    header('Location: '.$home_url);
    session_destroy();
    }	
?>