<?php
require_once './header.php'; 

$regexp_phone = '/^(\+?375)[-\(\s]?(25|29|33|44)[-\)\s]?(\d{3})[-\s]?(\d{2})[-\s]?(\d{2})$/';
$regexp_email = '/(\b[a-zA-Z0-9][a-zA-Z0-9\.]{1,100}[a-zA-Z0-9]\b)(\@)(\b[a-zA-Z0-9][\w\-\.]*[a-zA-Z0-9]\b)(\.)([a-z]{2,3})/';
if (preg_match($regexp_phone, $_REQUEST['phone']) == true && preg_match($regexp_email, $_REQUEST['email']) == true): ?>

<section class="form">
    <div class="container">

        <h3>Your information is accepted</h3>

    </div>
</section>

<?php else: header("Location: /page.php?id=contact");
endif;
header("refresh:5;url=/page.php?id=contact");

require_once './footer.php';
require_once './copyright.php';