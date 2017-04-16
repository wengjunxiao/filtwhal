<!doctype html>
<html lang="en" id="ng-app" data-framework="angularjs">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Filtwhal</title>

		<!-- <link rel="icon" type="image/x-icon" href=""> -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="/css/app.css">
		<base href="/">
		<common-header></common-header>
	</head>
	<body style="margin-top:60px">
      <div class="container">
		<ng-view ></ng-view>
        <common-footer></common-footer>
		<script data-main="/js/AMD" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.15/require.min.js"></script>
       </div>
	</body>
</html>
