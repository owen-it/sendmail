<!DOCTYPE html>
<html>
    <head>
        <title>Send mail...</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 20px;
            }

            input[type="text"] {
                -webkit-appearance: none;
                -webkit-border-radius: 0;
                border-radius: 0;
                background-color: #fff;
                font-family: inherit;
                border: 1px solid #ccc;
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                color: rgba(0,0,0,0.75);
                display: block;
                font-size: 14px;
                margin: 0 0 16px 0;
                padding: 8px;
                height: 37px;
                width: 100%;
                max-width: initial;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -webkit-transition: -webkit-box-shadow 0.45s,border-color 0.45s ease-in-out;
                -moz-transition: -moz-box-shadow 0.45s,border-color 0.45s ease-in-out;
                transition: box-shadow 0.45s,border-color 0.45s ease-in-out;
                -webkit-transition: all 0.15s linear;
                -moz-transition: all 0.15s linear;
                -o-transition: all 0.15s linear;
                transition: all 0.15s linear;
                font-size: 16px;
            }

            input[type="submit"] {
                cursor: pointer;
                font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
                font-weight: normal;
                line-height: normal;
                letter-spacing: normal;
                margin: 0 0 20px;
                position: relative;
                text-decoration: none;
                text-align: center;
                text-transform: uppercase;
                text-shadow: none;
                box-shadow: none;
                width: auto;
                height: auto;
                min-width: initial;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                outline: 0;
                display: inline-block;
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 17px;
                padding-left: 32px;
                font-size: 16px;
                background: #0f52ba !important;
                border-top: none !important;
                border-left: none !important;
                border-right: none !important;
                border-bottom: none !important;
                color: #fff !important;
                -webkit-transition: background-color 1s;
                -moz-transition: background-color 1s;
                -o-transition: background-color 1s;
                transition: background-color 1s;
                padding-right: 0;
                padding-left: 0;
                width: 100%;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                margin-bottom: 0;
                opacity: 1;
                float: initial;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Send mail...</div>
                <form action="/send" method="post">
                    <input type="text" value="" name="to" id="to" placeholder="Your mail" required><input type="submit" value="Send">
                </form>
            </div>
        </div>
    </body>
</html>
