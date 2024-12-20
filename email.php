<?php
    $check = mail("koshleshkumar21@gmail.com", "testing mail", "This is a test mail", "From:sinhashinkhal@gmail.com");
    if ($check) {
        echo "Mail sent successfully";
    } else {
        echo "Mail not sent.";
    }
?>
