<!DOCTYPE html>

<head>
    <style>
        $primary: rgb(182, 157, 230);

        h4 {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            opacity: .85;
        }

        label {
            font-size: 12.5px;
            color: #000;
            opacity: .8;
            font-weight: 400;
        }

        form {
            padding: 30px;
            padding-top: 20px;
            background: #fefefe;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 300px;

            p {
                line-height: 155%;
                margin-bottom: 5px;
                font-size: 14px;
                color: #000;
                opacity: .65;
                font-weight: 400;
                margin-bottom: 40px;
            }
        }

        button {
            -webkit-appearance: none;
            width: auto;
            min-width: 100px;
            border-radius: 24px;
            text-align: center;
            padding: 15px 40px;
            margin-top: 5px;
            background-color: blue;
            color: #fff;
            font-size: 14px;
            margin-left: auto;
            margin-top: 20px;
            font-weight: 500;
            box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, .13);
            border: none;
            transition: all .3s ease;
            outline: 0;

            &:hover {
                transform: translateY(-3px);
                box-shadow: 0 2px 6px -1px rgba($primary, .65);

                &:active {
                    transform: scale(.99);
                }
            }
        }

        input {
            font-size: 16px;
            padding: 20px 0px;
            height: 56px;
            border: none;
            border-bottom: solid 1px rgba(0, 0, 0, .1);
            background: #fff;
            width: 280px;
            box-sizing: border-box;
            transition: all .3s linear;
            color: #000;
            font-weight: 400;
            -webkit-appearance: none;

            &:focus {
                border-bottom: solid 1px $primary;
                outline: 0;
                box-shadow: 0 2px 6px -8px rgba($primary, .45);
            }
        }

        .floating-label {
            position: relative;
            margin-bottom: 10px;
            width: 100%;

            label {
                position: absolute;
                top: calc(50% - 7px);
                left: 0;
                opacity: 0;
                transition: all .3s ease;
                padding-left: 44px;
            }

            input {
                width: calc(100% - 44px);
                margin-left: auto;
                display: flex;
            }

            .icon {
                position: absolute;
                top: 0;
                left: 0;
                height: 56px;
                width: 44px;
                display: flex;

                svg {
                    height: 30px;
                    width: 30px;
                    margin: auto;
                    opacity: .15;
                    transition: all .3s ease;

                    path {
                        transition: all .3s ease;
                    }
                }
            }

            input:not(:placeholder-shown) {
                padding: 28px 0px 12px 0px;
            }

            input:not(:placeholder-shown)+label {
                transform: translateY(-10px);
                opacity: .7;
            }

            input:valid:not(:placeholder-shown)+label+.icon {
                svg {
                    opacity: 1;

                    path {
                        fill: $primary;
                    }
                }
            }

            input:not(:valid):not(:focus)+label+.icon {
                animation-name: shake-shake;
                animation-duration: .3s;
            }
        }

        $displacement: 3px;

        @keyframes shake-shake {
            0% {
                transform: translateX(-$displacement);
            }

            20% {
                transform: translateX($displacement);
            }

            40% {
                transform: translateX(-$displacement);
            }

            60% {
                transform: translateX($displacement);
            }

            80% {
                transform: translateX(-$displacement);
            }

            100% {
                transform: translateX(0px);
            }
        }

        .session {
            display: flex;
            flex-direction: row;
            width: auto;
            height: auto;
            margin: auto auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, .12);
        }

        body {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            background-color: rgb(230, 229, 229);
        }
    </style>
</head>

<body style="margin-top:10px">
    <div class="session">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h4>Admin Login</h4>
            {{-- <p>Welcome back! Log in using email and password.</p> --}}
            <div class="floating-label">
                <input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
                <label for="email">Email:</label>
                <div class="icon">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                            }
                        </style>
                        <g transform="translate(0 -952.36)">
                            <path
                                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
                        </g>
                        <rect class="st0" width="100" height="100" />
                    </svg>

                </div>
            </div>
            <div class="floating-label">
                <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
                <label for="password">Password:</label>
                <div class="icon">

                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                            }

                            .st1 {
                                fill: #010101;
                            }
                        </style>
                        <rect class="st0" width="24" height="24" />
                        <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                        <path class="st1"
                            d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                        <path class="st1"
                            d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
                    </svg>
                </div>

            </div>
            <button type="submit">Log in</button>
            <a href="/" class="discrete" style="text-decoration: none;">Go to home</a>
        </form>
    </div>
</body>
