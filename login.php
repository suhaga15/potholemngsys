<?php session_start(); 
//include('config.php');
?>
<!doctype html>
<html>
<head>
<title>Admin login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script>
			function clicked(){
			var x; 
			x = document.getElementById('name').value;
            y = document.getElementById('password').value;    
			if(x==""){
                document.getElementById('namecheck').innerHTML='<font color="red">(required) Username:</font>';  
                return false;              
            }      
            if(y==""){
                document.getElementById('passcheck').innerHTML='<font color="red">(required) Password:</font>'                                
                return false;
            }
            if(x=="admin"){
                if(y=="admin")
                    return true;
                else{
                    document.getElementById('passcheck').innerHTML='<font color="red">Incorrect Password:</font>';
                    return false;
                }
			}
			else{
					document.getElementById('namecheck').innerHTML='<font color="red">Incorrect Username:</font>';
					return false;
				}				
			}
</script>
</head>
<body>
<div class="main">
			<div class="row1">
				<p class="welcome"> Login </p>
				<img src="logo.jpg"/>
            </div>
            <div class="row2col2">
				<p class="content" >Login to allocate work to worker groups: <br></p>
                <form action='worker_home.php' method='post' onSubmit='return clicked();'>
                <b id='namecheck'>Username: </b>
                <input type="text" id="name"/>

                <br><br><b id='passcheck'>Password: </b>
                <input type="password" id="password"/>

                <br><br>
                <input type="submit" value="Submit" onClick="clicked()" />
                </form>                            
			</div>
</div>    
</body>
</html>