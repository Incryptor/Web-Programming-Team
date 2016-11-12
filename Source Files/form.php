<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LoL Informatics - Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

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

        <div class="container">
            <form id="demoform" class="form-horizontal" method="post" action="form.php">

                <div class="form-group">
                    <label for="summoner" class="col-sm-2 control-label">Summoner Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="summoner" name="summoner" placeholder="Summoner Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="passwrd" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="passwrd" name="passwrd" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Dropdown" class="col-sm-2 control-label">Rank</label>
                    <div class="col-sm-5">
                        <select class="form-control" type="Dropdown" id="Dropdown" name="Dropdown">
                <option value="" selected disabled>Please select</option>
                <option>Unranked</option>
                <option>Bronze</option>
                <option>Silver</option>
                <option>Gold</option>
                <option>Platinum</option>
                <option>Diamond</option>
                <option>Master</option>
                <option>Challenger</option>
              </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="checkbox" class="col-sm-2 control-label">Preferred Roles</label>
                    <div class="col-sm-5">
                        <div class="checkbox">
                            <label>
                <input type="checkbox" id="checkbox1" name="checkbox" value="top">Top&nbsp
              </label>
                            <label>
                <input type="checkbox" id="checkbox2" name="checkbox" value="jungle">Jungle&nbsp
              </label>
                            <label>
                <input type="checkbox" id="checkbox3" name="checkbox" value="mid">Mid&nbsp
              </label>
                            <label>
                <input type="checkbox" id="checkbox4" name="checkbox" value="bot">Bot&nbsp
              </label>
                            <label>
                <input type="checkbox" id="checkbox5" name="checkbox" value="support">Support
              </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="availability" class="col-sm-2 control-label">Receive Emails</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label><input type="radio" id="availability1" name="availability" value="yes" /> Yes &nbsp</label>
                            <label><input type="radio" id="availability2" name="availability" value="no" /> No</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" placeholder="Your favourite champions" rows="3" id="description" name="description"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>

    ?
    <script>
        //validation script
        $(document).ready(function() {
            $('#demoform').formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    summoner: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter your summoner name, it is required'
                            },
                            stringLength: {
                                min: 4,
                                max: 10,
                                message: 'The name must be more than 4 and less than 10 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The name can only consist of alphabetical, number and underscore'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email address is requierd'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    passwrd: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            different: {
                                field: 'summoner',
                                message: 'The password cannot be the same as username'
                            },
                            stringLength: {
                                min: 6,
                                max: 18,
                                message: 'The password must be more than 6 characterse long and less than 18 characters long'
                            }
                        }
                    },
                    Dropdown: {
                        validators: {
                            notEmpty: {
                                message: 'Rank is required'
                            }
                        }
                    },
                    checkbox: {
                        validators: {
                            notEmpty: {
                                message: 'Prefered Roles is required'
                            }
                        }
                    },
                    availability: {
                        validators: {
                            notEmpty: {
                                message: 'The Recieve Emails option is requried'
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: 'The Description text filed is required'
                            }
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>
