<html>
    <head>
        <title>thie for welocme</title>
        
        <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/TestForMultistepForms.css')?>" type="text/css"/>
   </head>

    <body>
        <form id="msform">
            <ul id="progressbar">
                <li class="active">account1</li>
                <li>account2</li>
                <li>account3</li>
            </ul>

            <fieldset>

                <h2 class="fs-title">personal </h2>
                <h2 class="fs-dubtitle">create your acconut</h2>
                <input type="text" placeholder="email" name="email"/>
                <input type="password" placeholder="password" name="pass"/>
                <input type="password" placeholder="re enter password" name="cpass"/>
                <input type="button" value="next" class="next action-button"/>

            </fieldset>

            <fieldset>

                <h2 class="fs-title"></h2>
                <h2 class="fs-dubtitle">educational</h2>
                <input type="text" placeholder="email" name="email"/>
                <input type="password" placeholder="password" name="pass"/>
                <input type="password" placeholder="re enter password" name="cpass"/>
                <input type="button" value="enter" class="next action-button"/>

            </fieldset>

            <fieldset>
                <h2 class="fs-title"></h2>
                <h2 class="fs-dubtitle">professional </h2>
                <input type="text" placeholder="email" name="email"/>
                <input type="password" placeholder="password" name="pass"/>
                <input type="password" placeholder="re enter password" name="cpass"/>
                
                <input type="button" value="enter" class="next action-button"/>
            </fieldset>

        </form>

        <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    </body>
</html>