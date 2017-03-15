<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>My App</title>
    <link href="/static/css/bootstrap.css" rel="stylesheet">
    <link href="/static/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/static/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">My App</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(Session::get('UserID')):?>
                        <li><a href="/doctor">Doctors</a></li>
                        <li><a href="/card">Cards</a></li>
                        <li><a href="/visitor">Visitors</a></li>
                        <li><a href="/record">Records</a></li>
                        <li><a href="/logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/registration">Registration</a></li>
                        <li><a href="/login">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div class="row">
                <?php include 'modules/'.$module.'/views/'.$content_view; ?>
            </div>
        </div>
    </div>
    <div id="footer">
	<div class="container">
            <div class="row">
                <div class="col-md-12">
	            <p class="copyright">&copy; <?=date('Y')?> My App</p>
                </div>
            </div>		
	</div>	
    </div>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/main.js"></script>
</body>
</html>
