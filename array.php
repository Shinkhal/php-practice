
<!-- <html>
    <body>
        <pre>
            <?php
                $cars = array("Volvo","BMW","Toyota");
                var_dump($cars);
            ?>
        </pre>
    </body>
</html> -->
<?php
    $courses = array("PHP","Laravel","Node JS","HTML","CSS","ASP.NET");
    print_r(array_chunk($courses,4));
?>