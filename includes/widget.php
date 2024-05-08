<?php
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $email = escape($email);
        $subject = escape($subject);
        $body = escape($body);
        sendEmailNotification($email, $subject, $body);
    }
?>

<div class="well form-wrap">
    <h4>Sazinies ar administrāciju</h4>
    <form role="form" action="" method="post" id="login-form" autocomplete="off">
        <div class="form-group">
            <label for="email" class="sr-only">Tavs e-pasts</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Tavs e-pasts">
        </div>
        <div class="form-group">
            <label for="subject" class="sr-only">Iemesls</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Iemesls">
        </div>
            <div class="form-group">
            <label for="body" class="sr-only">Situācijas apraksts</label>
            <textarea class="form-control" name="body" id="" placeholder="Situācijas apraksts"></textarea>
        </div>
        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Nosūtīt">
    </form>
</div>