<html>
    <head>
        <title>Contact</title>
        <link rel="shortcut icon" href="http://localhost/esib2019/favicon.ico" type="image/x-icon"/>
    </head>
    <body>
        <form action="contact.php" method="post">
            <h1>Hello World!</h1>
            <?php if($contactModel->hasErrors) { ?>
                <div>Your form contains ERRORS!</div>
            <?php } ?>
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo array_key_exists('name',$_POST)?$_POST['name']:''; ?>" /><br/>
            <label>Email*:</label>
            <input type="text" name="email" value="<?php echo array_key_exists('email',$_POST)?$_POST['email']:'' ?>" /><br/>
            <?php if($contactModel->hasErrors && array_key_exists('email',$contactModel->errorMsg)) { ?>
                <legend><?php echo $contactModel->errorMsg['email']; ?></legend>
            <?php } ?>
            <label>Message*:</label>
            <textarea name="message"><?php echo array_key_exists('message',$_POST)?$_POST['message']:'' ?></textarea><br/>
            <?php if($contactModel->hasErrors && array_key_exists('message',$contactModel->errorMsg)) { ?>
                <legend><?php echo $contactModel->errorMsg['message']; ?></legend>
            <?php } ?>
            <input type="submit" name="send-btn" value="Send Message" />
        </form>
    </body>
</html>