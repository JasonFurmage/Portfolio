<?php 

$pageTitle = "Jason Furmage | SCS Portfolio";
$title = "Jason Furmage";
$subtitle = "Junior Web & Software Developer";
$heading = "portfolio";

include("inc/validation.php");
include("inc/header.php");

?>

        <main>

            <!-- Projects -->

            <div class="container">
                <div class="heading" id="portfolio">
                    <h2>My Portfolio</h2>
                </div>
            </div>

            <div class="container">
                <div class="projects">
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Netmatters Homepage</h3>
                            </div>
                            <img src="assets/images/projects/netmatters-homepage.jpg" alt="Netmatters Homepage">
                            <div class="project_body">
                                <p>The Netmatters homepage and contact us page rebuilt from scratch using HTML, CSS, Javascript and PHP.</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="https://netmatters.jason-furmage.netmatters-scs.co.uk/" target="_blank"> Demo </a>
                                <a class="project-button" href="https://github.com/JasonFurmage/Netmatters-Homepage/" target="_blank"> Code </a>
                            </div>
                        </div>
                    </div>
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Image Generator</h3>
                            </div>
                            <img src="assets/images/projects/image-generator.jpg" alt="Project 2">
                            <div class="project_body">
                                <p>A simple image generator site that uses Picsum's API to fetch images and store them in seperate accounts. Made using HTML, CSS and Javascript.</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="https://js-array.jason-furmage.netmatters-scs.co.uk/" target="_blank"> Demo </a>
                                <a class="project-button" href="https://github.com/JasonFurmage/Image-Generator/" target="_blank"> Code </a>
                            </div>
                        </div>
                    </div>
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Project 3</h3>
                            </div>
                            <img src="assets/images/projects/coming-soon.jpg" alt="Project 3">
                            <div class="project_body">
                                <p>Coming Soon...</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="#"> Demo </a>
                                <a class="project-button" href="#"> Code </a>
                            </div>
                        </div>
                    </div>
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Project 4</h3>
                            </div>
                            <img src="assets/images/projects/coming-soon.jpg" alt="Project 4">
                            <div class="project_body">
                                <p>Coming Soon...</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="#"> Demo </a>
                                <a class="project-button" href="#"> Code </a>
                            </div>
                        </div>
                    </div>
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Project 5</h3>
                            </div>
                            <img src="assets/images/projects/coming-soon.jpg" alt="Project 5">
                            <div class="project_body">
                                <p>Coming Soon...</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="#"> Demo </a>
                                <a class="project-button" href="#"> Code </a>
                            </div>
                        </div>
                    </div>
                    <div class="project_item-wrapper">
                        <div class="project_item">
                            <div class="project_title">
                                <h3>Project 6</h3>
                            </div>
                            <img src="assets/images/projects/coming-soon.jpg" alt="Project 6">
                            <div class="project_body">
                                <p>Coming Soon...</p>
                            </div>
                            <div class="project_buttons">
                                <a class="project-button" href="#"> Demo </a>
                                <a class="project-button" href="#"> Code </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->

            <div class="container">
                <div class="heading" id="form">
                    <h2>Get in Touch</h2>
                </div>
            </div>

            <div class="container">
                <form method="POST" action="#form" accept-charset="UTF-8" class="form" id="js-form" novalidate>
                    <div class="form_section">
                    <div class="form_info">
                        <p>If you're interested and would like to know more, please complete the form below and I'll be in touch shortly.</p>
                        <p>Alternatively, you can give me a call on:</p>
                        <p>
                            <span class="form_contact">
                            <i class="fa-solid fa-phone"></i>
                            <strong><a href="tel:+12345678910">07494240665</a></strong>
                            </span>
                        </p>
                        <p>Or send me an email at:</p>
                        <p>
                            <span class="form_contact">
                            <i class="fa-solid fa-envelope"></i>
                            <strong><a href="mailto:jfurmage@me.com">jfurmage@me.com</a></strong>
                            </span>
                        </p>
                    </div>
                    </div>
                    <div class="form_section" id="form">
                        <div class="form_message" id="js-message"></div>

                        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { if (isset($errors)) insertFormMessages($errors); } ?>
                        
                        <div class="form_name-wrapper">
                            <div class="form_group">
                                <input class="form-text-field" name="first_name" type="text" placeholder="First Name*" maxlength="255" value="<?= htmlspecialchars($first_name ?? "") ?>">
                                <small></small>
                            </div>
                            <div class="form_group">
                                <input class="form-text-field" name="last_name" type="text" placeholder="Last Name*" maxlength="255" value="<?= htmlspecialchars($last_name ?? "") ?>">
                                <small></small>
                            </div>
                        </div>
                        <div class="form_group">
                            <input class="form-text-field" name="email" type="email" placeholder="Email Address*" maxlength="255" value="<?= htmlspecialchars($email ?? "") ?>">
                            <small></small>
                        </div>
                        <div class="form_group">
                            <input class="form-text-field" name="subject" type="text" placeholder="Subject*" maxlength="255" value="<?= htmlspecialchars($subject ?? "") ?>">
                            <small></small>
                        </div>
                        <div class="form_group">
                            <textarea class="form-text-area" name="message" placeholder="Message*"><?= htmlspecialchars($message ?? "") ?></textarea>
                            <small></small>
                        </div>
                        <div class="form_group">
                            <button class="form-submit-button" type="submit">
                                <i class="fa-regular fa-paper-plane"></i>
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </main>


 <?php include("inc/footer.php"); ?>
