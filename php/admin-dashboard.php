<html>

<head>
    <title>PIET College - Student Evaluation System</title>
</head>

<body>

    <?php

    session_start();
    if ($_SESSION['username']) {
        echo '<script>alert("Hello ' . $_SESSION['username'] . '");</script>';
    ?>

        <script>
            window.open('../service-pages/admin-exam-details-upload.php', '_self');
        </script>

    <?php

    } else {
        echo "error!!";
    }

    ?>

</body>

</html>