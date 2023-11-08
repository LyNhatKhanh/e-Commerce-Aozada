<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAZADA</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/821a4c6a56.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <?php
        include("/Study/StudyApp/xampp/htdocs/alibaba/pages/header.php");
        include("/Study/StudyApp/xampp/htdocs/alibaba/pages/main.php");
        include("/Study/StudyApp/xampp/htdocs/alibaba/pages/footer.php");
        ?>
    </div>
    <script>
        scrollHeader();

        function scrollHeader() {
            const section1 = document.querySelector('.header')
            window.addEventListener('scroll', () => {
                let y = 1 + (window.scrollY || window.pageYOffset) / 150
                if (y > 1) {
                    section1.style.backgroundColor = 'white'
                    section1.style.color = 'black'
                } else {
                    section1.style.backgroundColor = '#0000'
                    section1.style.color = 'white'
                }
            })
        }
    </script>
</body>

</html>