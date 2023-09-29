<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Web</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/icon-kretech.png" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="assets/css/styles.css" rel="stylesheet" />

    <!-- My Style -->
    <!-- page home -->
    <style>
        /* text */
        .text-justify {
            text-align: justify;
        }

        /* font style */
        .ff-pacifico {
            font-family: 'Pacifico', cursive;
        }

        .ff-inter {
            font-family: 'Inter', sans-serif;
        }

        /* navbar */
        #mainNav .nav-link:hover {
            color: #F66B0E !important;
        }

        #mainNav .nav-link.active {
            position: relative;
            font-weight: 600;
            color: #F66B0E !important;
        }

        #mainNav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0.5rem;
            left: 0.4rem;
            width: 50%;
            height: 2px;
            background-color: #F66B0E;
        }

        /* header */
        @keyframes blink {

            0%,
            100% {
                border-right-color: transparent;
            }

            50% {
                border-right-color: #FFF;
            }
        }

        .masthead #title-type::after {
            content: "";
            padding-left: 0.6rem;
            border-right: 2px solid #FFF;
            animation: blink 1s step-end infinite;
        }

        /* about */
        #about {
            background-color: #EFEFEF;
        }

        #about .card {
            background-color: #112B3C;
            box-shadow: 0px 0px 10px 10px rgba(246, 107, 14, 0.75);
        }

        #about .fa-circle-check {
            color: #58fe2a;
        }

        #about .fa-circle-exclamation {
            color: #c8970e;
        }

        @media (max-width: 575.98px) {
            #about .card-body .section-heading {
                font-size: 2rem;
            }

            #about .card-body div p {
                font-size: 1rem;
            }
        }

        /* services */
        #services {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #services .card {
            background-color: rgba(246, 107, 14, 0.75);
            box-shadow: 0px 0px 10px 10px rgba(32, 83, 117, 0.5);
        }

        #services .card .fa-stack .fa-circle {
            max-width: fit-content;
            border-radius: 50%;
            color: #205375;
            box-shadow: 0px 0px 5px 5px rgba(255, 255, 255, 0.5);
        }

        #services .card .fa-stack .fa-inverse {
            color: #F66B0E;
        }

        /* portfolio */
        #portfolio {
            background-color: #EFEFEF;
        }

        #portfolio .card {
            border: none;
            box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.25);
        }

        #portfolio .card .card-text span {
            color: #F66B0E;
        }

        #portfolio .card .btn-detail {
            height: 40px;
            width: auto;
            border: 2px solid #F66B0E;
            margin: auto 0 auto auto;
            border-radius: 50%;
        }

        #portfolio .port-btn-load, #portfolio .port-btn-less {
            margin: 0 auto;
            background-color: #F57C2A;
            color: #EFEFEF;
        }

        #portfolio .port-btn-load:hover, #portfolio .port-btn-less:hover {
            background-color: #C95C14;
        }

        /* footer */
        .footer {
            background-color: #205375;
            color: #EFEFEF;
        }
    </style>
    <!-- page portfolio -->
    <style>
        /* port head */
        #port-head {
            padding-top: 7.5rem;
            padding-bottom: 3rem;
            font-family: 'Inter', sans-serif;
            text-align: center;
            color: #fff;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
        }

        #port-head .masthead-subheading {
            font-size: 1.5rem;
            line-height: 1.5rem;
            margin-bottom: 25px;
        }

        #port-head .masthead-heading {
            font-size: 3.25rem;
            font-weight: 700;
            line-height: 3.25rem;
            margin-bottom: 2rem;
        }

        @media (min-width: 768px) {
            #port-head {
                padding-top: 10rem;
                padding-bottom: 7.5rem;
            }

            #port-head .masthead-subheading {
                font-size: 1.25rem;
                line-height: 2.25rem;
                margin-bottom: 2rem;
            }

            #port-head .masthead-heading {
                font-size: 4.5rem;
                font-weight: 700;
                line-height: 4.5rem;
                margin-bottom: 4rem;
            }
        }

        /* port body */
        #port-body .carousel-indicators button {
            height: 15px;
            width: 15px;
            border-radius: 50%;
        }

        #port-body .carousel-inner {
            box-shadow: 0px 0px 8px 6px rgba(0, 0, 0, 0.5);
        }

        #port-body .card {
            background-color: #112B3C;
            color: #EFEFEF;
            box-shadow: 0px 0px 8px 6px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <?php require('section_navbar.php') ?>