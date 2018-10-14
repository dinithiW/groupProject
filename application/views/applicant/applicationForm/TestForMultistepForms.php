<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form id="msform">
        <ul id="progressbar">
            <li>account1</li>
            <li>account2</li>
            <li>account3</li>
        </ul>
        <fieldset>
            <h2 class="fs-title">CREATE YOUR ACCOUNT</h2>
            <h3 class="fs-subtitle">ADD DETAILS</h3>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="password">
            <input type="password" name="cpass" placeholder="confirm password">
        
            <input type="button" name="next" value="Next">
        </fieldset>

        <fieldset>
            <h2 class="fs-title">PERSONAL DETAILS</h2>
            <h3 class="fs-subtitle">ADD DETAILS</h3>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="password">
            <input type="password" name="cpass" placeholder="confirm password">
            <input type="button" name="previous" value="previous">
            <input type="button" name="next" value="Next">
        </fieldset>

        <fieldset>
            <h2 class="fs-title">SOCIAL DETAILS</h2>
            <h3 class="fs-subtitle">ADD DETAILS</h3>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="password">
            <input type="password" name="cpass" placeholder="confirm password">
            <input type="button" name="previous" value="previous">
            <input type="button" name="submit" value="submit">
        </fieldset>

    </form>

        <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
</body>
</html>