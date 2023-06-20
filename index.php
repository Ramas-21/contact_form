<!DOCTYPE html>
<html>

<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <header>Send us a Message</header>
        <form action="#">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your phone">
                </div>
                <div class="field">
                    <input type="text" name="website" placeholder="Enter your website">
                </div>
            </div>
            <div class="message">
                <textarea placeholder="write your message" name="message"></textarea>
            </div>
            <div class="button-area">
                <button type="submit">Send Message</button>
                <span>Sending your message...</span>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>