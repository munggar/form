<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title><link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    @notifyCss
</head>

<body style="background: black;">
    <x:notify-messages />
    <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
    </div>
    <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
    </div>
    <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="proses_login" method="post" class="form-box" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Your Email : </label>
                    <input type="text" id="name" name="email" class="form-control" placeholder="Enter Name"/>
                </div>
                <div class="form-group">
                    <label>Your Password :</label>
                    <input type="password" id="pass" name="password" class="form-control" placeholder="Enter Password"/>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" name="pass" class="btn btn-md btn-info"> Lets Go ! </button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    @notifyJs
</body>

</html>
