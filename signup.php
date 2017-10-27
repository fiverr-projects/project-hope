<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/hope/css/bootstrap.css">
    <script src="/hope/js/jquery.js"></script>
    <script src="/hope/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/795dd48394.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="/hope/css/index.css">
</head>
<body>
	<div class="container-fluid">
		<div id="wrapperrow" class="row">
			<div id="intro" class="col-md-7">
				<div id="logo" class="row">
                    <div class="col-md-12">
                        <span id="appname">
                            HOPE
                        </span>
                        <br>
                        <span id="appmotto">
                            Helping Others Progress Economically
                        </span>    
                    </div>
					<!-- <img src="/hope/img/crown(1).png"> -->
					
				</div>
				<div id="about" class="row">
					<!-- <h1>
						Welcome
					</h1> -->
					<p id="hr">
					</p>
					</span>
					<button class="btn" id="loginhere">
						Login Here
					</button>
				</div>
			</div>
			<div id="loginform" class="col-md-5">
				<h2>
					Or Signup to your account
				</h2>
                <form method="post" action="http://localhost/hope/index.php" onsubmit="return validateForm()" id="myForm">
    				<div id="sign-up-form">

                        <input class="form-control" type="text" name="username" placeholder="User Name" required>
                        <br>

    					<input id="first" class="form-control" name="email" type="email" placeholder="Email Id" required>
    					<!-- <span class="divider"></span> -->
                        <br>
    					<input id="second"  class="form-control" name="password" type="Password" placeholder="Password" required>
    					<!-- <span class="divider"></span> -->
                        <br>

                        <input id="second"  class="form-control" name="password" type="Password" placeholder="Confirm Password" required>
    				
    					<input type="submit" id="loginbutton" class="btn" type="button" value="Signup">
    				</div>
                </form>

			</div>
		</div>
	</div>

    <script type="text/javascript">
        function validateForm() {
        var x = document.forms["myForm"]["username"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
    } 

    $('#loginhere').on('click', function(){
            window.location.replace("/hope/login.php");
        });
        

    </script>
</body>
</html>