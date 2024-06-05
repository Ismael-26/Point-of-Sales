<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customize Cake Shop</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="pos/admin/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="pos/admin/assets/img/icons/favicon-16x16.png">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: white;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }
       
        .links>a {
           
            color: #636b6f;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border: 2px solid gray;
            padding: 15px 50px 15px 50px;
            border-radius:10px;
        }
        .links>a:hover {
            border: 5px solid #f53958;
            color: #f53958;
            background-color:white;
           
        }
           
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="container-fluid "  >
                <video src="pos/admin/assets/video/logo-vid.mp4"  autoplay muted loop style="width:500px;height:500px">
                </video>
                <div class="links">
                    <a href="pos/admin/index">Log In</a>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>