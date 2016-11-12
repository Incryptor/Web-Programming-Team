<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LoL Informatics - Plots</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <!-- Custom CSS -->
    <link href="css/MyCSS.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87011525-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
    <!-- YOUR CONTENT HERE -->
    <div class="Pwrap2" style="background-color:powderblue;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="index.php">LoL Informatics</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="index.php#Introduction">Introduction <span class="sr-only">(current)</span></a></li>
                        <li><a href="index.php#ChampionSpotlight">Champion Spotlight</a></li>
                        <li><a href="index.php#Champions">Champions</a></li>
                        <li><a href="form.php">Form</a></li>
                        <li><a href="plots.php">Plots</a>
                            <li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <h2>Champion Releases over Time</h2>
                <div id="firstChart" style="height: 250px;"></div>
            </div>
            <div class="col-md-6">
                <h2>Player base by Role</h2>
                <div id="secondChart" style="height: 250px;"></div>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/formValidation.min.js"></script>
        <script src="js/framework/bootstrap.min.js"></script>
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <!--javascript with morris stuff for plots-->
        <script>
            //plots script
            $(document).ready(function() {
                Morris.Line({
                    element: 'firstChart',
                    data: [{
                        y: '2009',
                        a: 42,
                        b: 42
                    }, {
                        y: '2010',
                        a: 24,
                        b: 66
                    }, {
                        y: '2011',
                        a: 24,
                        b: 90
                    }, {
                        y: '2012',
                        a: 19,
                        b: 109
                    }, {
                        y: '2013',
                        a: 8,
                        b: 117
                    }, {
                        y: '2014',
                        a: 6,
                        b: 123
                    }, {
                        y: '2015',
                        a: 5,
                        b: 128
                    }, {
                        y: '2016',
                        a: 5,
                        b: 133
                    }],
                    xkey: 'y',
                    ykeys: ['b', 'a'],
                    labels: ['Total Champions', 'Champions Released'],
                    lineColors: ['#ff0000', '#ff9a16']
                });

                Morris.Donut({
                    element: 'secondChart',
                    data: [{
                        label: "Top",
                        value: 16000000
                    }, {
                        label: "Jungle",
                        value: 21000000
                    }, {
                        label: "Mid",
                        value: 25000000
                    }, {
                        label: "Bot",
                        value: 23000000
                    }, {
                        label: "Support",
                        value: 15000000
                    }],
                    colors: ['#0cfcc4', '#0cc0fc', '#2041e8', '#940cfc', '#99068f']
                });
            });
        </script>

</body>

</html>
