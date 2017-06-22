<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{metaTitle}</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/css/navbar-fixed-top.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Framework Demo Project</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">IndexController</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PostController <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/post">All Posts</a></li>
                            <li><a href="/post/2">One Post</a></li>
                            <li><a href="/post/100">Incorrect Post</a></li>
                        </ul>
                    </li>

                    <li><a href="/backend">Backend with Middleware</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Components <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/system/di">DI Services</a></li>
                            <li><a href="/system/config">All Config</a></li>
                            <li><a href="/system/route">Route</a></li>
                            <li><a href="/system/router">Router</a></li>
                            <li><a href="/system/404">Error 404</a></li>
                            <li><a href="/system/500">Error 500</a></li>

                            <li><a href="/system/valid">Validator valid</a></li>
                            <li><a href="/system/invalid">Validator invalid</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="jumbotron">
            {content}
        </div>
    </div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>

