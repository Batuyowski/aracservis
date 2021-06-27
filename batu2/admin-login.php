<!DOCTYPE html>
<html lang="tr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Araç Servis - Yetkili Giriş</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="admin-assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin-assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="admin-assets/css/form-elements.css">
        <link rel="stylesheet" href="admin-assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="admin-assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="admin-assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin-assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin-assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="admin-assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Araç Servis</strong> Yetkili Giriş</h1>
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sisteme giriş yapın</h3>
                            		<p>Kullanıcı adınızı ve şifrenizi girerek giriş yapabilirsiniz:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="admingiris.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Kullanıcı adı</label>
			                        	<input type="text" name="k_kullaniciadi" placeholder="Kullanıcı adı..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Şifre</label>
			                        	<input type="password" name="k_sifre" placeholder="Şifre..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Giriş Yap</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
        


        <!-- Javascript -->
        <script src="admin-assets/js/jquery-1.11.1.min.js"></script>
        <script src="admin-assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="admin-assets/js/jquery.backstretch.min.js"></script>
        <script src="admin-assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="admin-assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>