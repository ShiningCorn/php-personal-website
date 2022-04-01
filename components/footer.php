<footer>

    <?php include 'database/send_email.php' ?>

    <section class="section-contact" id="contact">
        <h2>Keep in touch with MINH MIKE NGO</h2>
        <div class="form-container form-grid">    
            <div>    
                <img src="img/avatar.jpg" alt="MinhMikeNgo" class="avatar2">
                <h4>Minh Mike Ngo</h4>                   
                <a href="https://www.facebook.com/minhngo2408/"target="_blank"><ion-icon name="logo-facebook" size="large" > </ion-icon></a>
                <a href="https://www.linkedin.com/in/minhmikengo"target="_blank"><ion-icon name="logo-linkedin" size="large" > </ion-icon></a>
                <a href="mailto:minhmikengo@gmail.com"target="_blank"><ion-icon name="mail" size="large" > </ion-icon></a>         
            </div>
            <div class="contact">
                <div class="contact-text-box">
                    <form method="post" action="#" class="contact-form">
                        <div>
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Your name">
                        </div>

                        <div>
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>

                        <div>
                            <label for="message">Message:</label>
                            <textarea name="message" placeholder="Enter Your Message!"></textarea>
                        </div>

                        <input class="btn btn--full btn-send" type="submit" value="Send &rarr;" data-wait="Please wait..." >

                    </form>
                </div>
            </div>
        </div>
    </section>
        <button onclick="topFunction()" id="go-top-btn" title="Go to top"><ion-icon size="large" name="arrow-up-circle-sharp"></ion-icon></button>
        <script src="resources/js/scroll.js"></script>
</footer>