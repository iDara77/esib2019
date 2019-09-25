<html>
    <head>
        <title>Contact</title>
        <link rel="shortcut icon" href="http://localhost/esib2019/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/style2.css" />
    </head>
    <body>
        <div>
            <h1>Thank you!</h1>
            <p>Your name is: <?php echo $_POST['name'] ?></p>
            <p>and your email is: <?php echo $_POST['email'] ?></p>
            <p>Your Message:<br/>
            <?php echo $_POST['message'] ?>
            </p>
            
</div>
    </body>
</html>