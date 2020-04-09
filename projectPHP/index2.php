<?php include("common/header2.php") ?>

    <div class="contact-title">
        <h1> Say Hello </h1>
        <h2> we are always ready to serve You ! </h2>
    </div>
    <div class="contact form">
        <form method="POST" action="contact-form-handler.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
            <input name="Email" type="email" class="form-control" placeholder="Your Email" required><br>
            <textarea name="message" class="form-control" placeholder="Text Some Content" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSEGE">
        </form>
    </div>

<?php include("common/footer2.php") ?>
