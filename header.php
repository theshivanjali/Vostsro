<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <style>
        html,
        body {
            height: 100%;
        }

        #image {
            background-image: url(https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2018/02/07/104995183-GettyImages-512136509.1910x1000.jpg);
            background-attachment: fixed;
            width: 100%;
            height: 400px;
            background-size: 100% 100%;
            box-shadow: inset 0px 0px 150px black;
            opacity : 0.9;
        }

        #image2 {
            background-image: url(wbg.jpg);
        }

        .redbg {
            background: white;
            width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
        }

        .imagesize {
            width: 300px;
            height: 200px;
        }

        .perimg {
            width: 250px;
            height: 250px;
            padding: 20px;
        }

        .footer {
            display: inline;
            margin-left: 28px;
            font-size: 18px;
            color: gray;
        }

        .copyright {
            color: gray;
            font-size: 14px;
        }
        .graybg {
            color: orange;
            background: #70809069;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <!----------------------------------nav bar------------------------------------------------------------------>
        <div class="row fixed-top bg-light">
            <div class="col-md-2 px-0"></div>
            <div class="col-md-10">
                <nav class="navbar navbar-expand-md navbar-light px-0 mx-auto bg-light">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.png" height="40px" width="40px">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!----------------------------------nav bar ends------------------------------------------------------------------>
        <div class="row mt-5 h-75">
            <div class="col-md-12 bg-dark h-100" id="image">
        