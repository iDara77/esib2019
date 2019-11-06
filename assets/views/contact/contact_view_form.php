
<h1 id="main-title">Hello</h1>
<h2 class="subtitle">Subtitle</h2>
<form action="contact.php" method="post">
    <h1>Hello World!</h1>
    <h2 class="subtitle">Subtitle</h2>
    <?php if($contactModel->hasErrors) { ?>
        <div>Your form contains ERRORS!</div>
    <?php } ?>
    <label class="red" id="name-label">Name:</label>
    <input type="text" id="name-field" class="red" name="name" value="<?php echo array_key_exists('name',$_POST)?$_POST['name']:''; ?>" /><br/>
    <label class="red" id="email-label">Email*:</label>
    <input type="text" id="email-field" class="red" name="email" value="<?php echo array_key_exists('email',$_POST)?$_POST['email']:'' ?>" /><br/>
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