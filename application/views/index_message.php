<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MUSTAKA</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/image/logo.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/userstyle.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <form action="<?php echo base_url('Home/input') ?>" method="post">
            <input type="text" name="name" id="name" placeholder="Nama" required />
            <h3>Rate Our Museum</h3>
            <div class="rating" onclick="showFeedback()">
                <input type="radio" id="star5" name="rating" value="5" required />
                <label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" required />
                <label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" required />
                <label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" required />
                <label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" required />
                <label for="star1"></label>
            </div>
            <div id="feedbackText"></div>
            <h3>Saran Dan Pesan</h3>
            <textarea name="comment" id="textarea" cols="30" rows="10" placeholder="Tulis pesan disini" required></textarea>
            <br>
            <div class="Social-link">
                <h3>Connect With Us</h3>
                <a href="https://www.instagram.com/mustaka.akpol/" target="_blank">
                    <i class="fa-brands fa-instagram fa-spin fa-lg" style="color: #000000;"></i>
                    @Mustaka Akpol
                </a>
                <a href="https://www.mustaka.akpol.ac.id/index.php" target="_blank">
                    <i class="fa-sharp fa-solid fa-globe fa-spin fa-lg" style="color: #000000;"></i>
                    www.mustaka.akpol.ac.id
                </a>
            </div>
            <br>
            <input type="submit" value="Submit" class="new-button" />
        </form>

    </div>
    <script src="<?php echo base_url('asset/script/script.js'); ?>"></script>
    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            var radioChecked = document.querySelector('input[name="rating"]:checked');
            var textarea = document.getElementById("textarea");

            if (!radioChecked || !textarea.value.trim()) {
                event.preventDefault();
                alert("Please make sure all required fields are filled out.");
            }
        });
    </script>
</body>

</html>