<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .error-overlay {
            width: 100vw;
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            top: 0;
            pointer-events: none;
            z-index: 1;
            -webkit-transition: opacity .4s;
            transition: opacity .4s;
        }

        .error-wrapper {
            min-width: 25rem;
            height: 16.875rem;
            position: relative;
        }

        .login-error-message {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 0.9375rem;
            text-align: center;
            height: 1.75rem;
            color: #2989a2;
            margin: 0 auto 2.5rem;
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            width: 100%;
        }

        @media screen and (max-width: 43.75rem) {
            .login-error-message {
                height: 3rem;
                margin: 0 0 0.625rem 0;
            }
        }

        .loader-icon {
            width: 1.875rem;
            height: 1.875rem;
            background-color: #2989a2;
            border-radius: 50%;
            -webkit-transform: translateY(-10.625rem);
            transform: translateY(-10.625rem);
            position: absolute;
            bottom: 0rem;
            left: 0;
            right: 0;
            margin: 0 auto;
            z-index: 1;
        }

        .loader-icon.bounce {
            -webkit-animation-name: bounceball;
            animation-name: bounceball;
            -webkit-animation-duration: 1.2s;
            animation-duration: 1.2s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(0.8, 0.1, 0.28, 0.89);
            animation-timing-function: cubic-bezier(0.8, 0.1, 0.28, 0.89);
        }

        .loader-shadow {
            width: 0.9375rem;
            height: 0.4375rem;
            background: rgba(208, 208, 208, 0.6);
            border-radius: 0.4375rem / 0.1875rem;
            position: absolute;
            bottom: 0.3125rem;
            left: 0;
            right: 0;
            margin: 0 auto;
            -webkit-box-shadow: 0 0 0.1875rem 0.1875rem rgba(208, 208, 208, 0.6);
            box-shadow: 0 0 0.1875rem 0.1875rem rgba(208, 208, 208, 0.6);
        }

        .loader-shadow.bounce {
            -webkit-animation-name: shadow;
            animation-name: shadow;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-duration: 1.2s;
            animation-duration: 1.2s;
        }

        @-webkit-keyframes bounceball {
            0% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
            }

            30% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                height: 1.875rem;
                width: 1.875rem;
            }

            33% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                height: 0.9375rem;
                width: 2.375rem;
            }

            50% {
                height: 2.1875rem;
                width: 1.5625rem;
            }

            85% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
                height: 1.875rem;
                width: 1.875rem;
            }

            100% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
            }
        }

        @keyframes bounceball {
            0% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
            }

            30% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                height: 1.875rem;
                width: 1.875rem;
            }

            33% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                height: 0.9375rem;
                width: 2.375rem;
            }

            50% {
                height: 2.1875rem;
                width: 1.5625rem;
            }

            85% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
                height: 1.875rem;
                width: 1.875rem;
            }

            100% {
                -webkit-transform: translateY(-10.625rem);
                transform: translateY(-10.625rem);
            }
        }

        @-webkit-keyframes shadow {
            0% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            20% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            32% {
                opacity: 1;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes shadow {
            0% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            20% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            32% {
                opacity: 1;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

    </style>
    <title>Document</title>
</head>
<body>
<div id="loader" class="error-overlay">
    <div class="error-wrapper">
        <p class="login-error-message">
            Login error &#8230;
        </p>
        <div id="loader-icon" class="loader-icon bounce"></div>
        <div id="loader-shadow" class="loader-shadow bounce">
        </div>
    </div>
</div>
</body>
</html>