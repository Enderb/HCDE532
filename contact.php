<?php include('includes/header.php'); ?>

            <!-- Begin Text -->
            <article id="text">
                <h2>Contact Me</h2>
                <p>Let me know what you think!</p>

                <!-- Begin Send Email PHP Script -->
                <?php //Form Handling Script

                if(isset ($_POST['submit'])) {
                    
                    $mailRecipient = "enderb@uw.edu"; //recipient of the email
                    $mailSubject = "{$_POST['subject']}"; //subject of the email
                    $mailSender = "From: {$_POST['email']}"; //sender of the email
                    $mailMessage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); //message of the email

                    mail($mailRecipient, $mailSubject, $mailMessage, $mailSender);

                    print("<p>Thank you for contacting me, {$_POST['name']} </p>\n");
                }

                ?>
                <!-- End Send Email PHP Script -->

                <!-- Begin Contact Form -->
                <form action="contact.php" method="post" name="contact" id="contact-form">
                    <label for="name">Name:</label>
                    <input name="name" type="text" required="required">
                    <label for="email">Email:</label>
                    <input name="email" type="email" required="required">
                    <label for="subject">Subject:</label>
                    <select name="subject">
                        <option value="Generic Inquiry" selected>General Inquiry</option>
                        <option value="Specific Inquiry">Specific Inquiry</option>
                        <option value="Stoopid Inquiry">Stoopid Inquiry</option>
                    </select>
                    <label for="message">Message:</label>
                        <textarea name="message" cols="40" rows="5" required></textarea>
                    <button type="submit" name="submit">Submit Message</button>
                </form>
                <!-- End Contact Form -->


            </article>
            <!-- End Text -->

            <!-- Begin Sidebar -->
            <aside id="sidebar">
                <h2>Contact</h2>
                <ul>
                    <li>Helloooo222</li>
                    <li>heeeeeyyy444</li>
                    <li>3333333</li>

                </ul>
            </aside>
            <!-- End Sidebar -->

<?php include('includes/footer.php'); ?>