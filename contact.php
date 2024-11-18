<!DOCTYPE html>
<html lang="en">
<?php 
    include "./utils/head.php"
?>

<body>
    <?php
        include "./utils/header.php"
    ?>

    <main>
        <div class="page-title">
            <span class="xxxl bold">CONTACT</span>
            <div class="h-flx gap-10">
                <i class="fa-solid fa-house red"></i>
                <a href="/" class="m bold">Home</a>
                <span class="l bold red">></span>
                <span class="m bold">Contact</span>
            </div>
        </div>
        <div class="container contact-section">
            <div class="h-flx gap-50 align-start">
                <div class="flex-1">
                    <form action="" class="frm">
                        <div class="section_title">
                            <h1>Get In Touch</h1>
                        </div>
                        <div class="v-flx gap-10">
                            <div class="h-flx gap-10">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="h-flx gap-10">
                                <input type="text" name="subject" placeholder="Subject" required>
                                <input type="tel" name="phone" placeholder="Your Phone Number" required>
                            </div>
                            <textarea name="message" placeholder="Write Your Message Here..." class="txt-area" rows="5"
                                required></textarea>
                        </div>
                        <div class="btn-container">
                            <button class="animated-btn dark">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="flex-1 contact-section">
                    <div class="section_title">
                        <h1>Contact Information</h1>
                    </div>
                    <div class="v-flx gap-20">
                        <span class="grey bold">81 Chebaw, Oued Elil City, Manouba Tunis.</span>
                        <div class="h-flx gap-50">
                            <div class="v-flx gap-10">
                                <span class="m bold">Email Us</span>
                                <div class="action-container">
                                    <a href="mailto:gauto-mail@email.com">gauto-mail@email.com</a>
                                </div>
                            </div>
                            <div class="v-flx gap-10">
                                <span class="m bold">Call Us</span>
                                <div class="action-container">
                                    <a href="tel:(+216) 22 234 567">(+216) 22 234 567</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="v-flx gap-10">
                                <span class="m bold">Follow Us:</span>
                                <div class="h-flx gap-10">
                                    <div class="social-container">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                    <div class="social-container">
                                        <i class="fa-brands fa-twitter"></i>
                                    </div>
                                    <div class="social-container">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                    <div class="social-container">
                                        <i class="fa-brands fa-github"></i>
                                    </div>
                                    <div class="social-container">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "./utils/footer.php"
    ?>
</body>

</html>