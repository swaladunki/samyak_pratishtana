<?php
$page_title = "Contact Us";
$current_page = "contact";
$is_subpage = false;
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="section section-cream" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-heading">
            <p class="section-subheading">Get in Touch</p>
            <h2>Contact Samyak</h2>
        </div>
        <p style="text-align: center; color: #666; font-size: 1.1rem; max-width: 700px; margin: 0 auto;">
            Have questions? Want to enroll in programs? We'd love to hear from you
        </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form">
                <h3 style="color: var(--color-brown); margin-bottom: 1.5rem;">Send us a Message</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required placeholder="What is this about?">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required placeholder="Tell us more..."></textarea>
                    </div>

                    <button type="submit" class="form-submit">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <div class="contact-info-item">
                    <h4 style="color: var(--color-brown); margin-bottom: 1rem;">📍 Address</h4>
                    <p style="color: #666;">
                        123 Heritage Lane<br>
                        Sanskrit Valley, India<br>
                        560001
                    </p>
                </div>

                <div class="contact-info-item">
                    <h4 style="color: var(--color-brown); margin-bottom: 1rem;">📞 Phone</h4>
                    <p style="color: #666;">
                        <strong>Main:</strong> +91 (0)80 1234 5678<br>
                        <strong>Admin:</strong> +91 (0)80 1234 5679<br>
                        <strong>Programs:</strong> +91 (0)80 1234 5680
                    </p>
                </div>

                <div class="contact-info-item">
                    <h4 style="color: var(--color-brown); margin-bottom: 1rem;">📧 Email</h4>
                    <p style="color: #666;">
                        <strong>General:</strong> info@samyak.org<br>
                        <strong>Enrollments:</strong> programs@samyak.org<br>
                        <strong>Research:</strong> research@samyak.org
                    </p>
                </div>

                <div class="contact-info-item">
                    <h4 style="color: var(--color-brown); margin-bottom: 1rem;">⏰ Office Hours</h4>
                    <p style="color: #666;">
                        <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM<br>
                        <strong>Saturday:</strong> 10:00 AM - 4:00 PM<br>
                        <strong>Sunday:</strong> Closed
                    </p>
                </div>

                <div style="background: var(--color-cream); padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--color-gold); margin-top: 1rem;">
                    <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Quick Response</h4>
                    <p style="color: #666; font-size: 0.9rem;">
                        We typically respond to inquiries within 24 hours on business days.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2>Our Location</h2>
        </div>

        <div class="contact-map">
            🗺️ Map Location (Embedded Map Placeholder)
        </div>

        <p style="text-align: center; color: #666; margin-top: 2rem; font-size: 0.95rem;">
            Located in the heart of Sanskrit Valley, easily accessible by public transportation and parking available.
        </p>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Do I need prior Sanskrit knowledge to join?</h4>
                <p style="color: #666;">
                    No, we welcome complete beginners! Our programs are designed for all levels, from absolute beginners
                    to advanced scholars. We provide beginner-friendly introductions.
                </p>
            </div>

            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">What are the class timings?</h4>
                <p style="color: #666;">
                    We offer flexible scheduling with morning, evening, and weekend classes. Online classes are available
                    for international students. Specific timings are provided during enrollment.
                </p>
            </div>

            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Are certificates provided?</h4>
                <p style="color: #666;">
                    Yes, upon successful completion of any program, you'll receive a recognized certificate from Samyak.
                    Certificates are awarded for full participation and passing evaluations.
                </p>
            </div>

            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">What is the course fee?</h4>
                <p style="color: #666;">
                    Program fees vary based on the course duration and format. Please contact our programs team or visit
                    our website for detailed pricing information. Discounts available for group enrollments.
                </p>
            </div>

            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Can I attend as a non-resident?</h4>
                <p style="color: #666;">
                    Yes, we have full online programs for remote students. We also have accommodation options for participants
                    traveling from outside the area. Contact us for details.
                </p>
            </div>

            <div style="margin-bottom: 2rem; background: var(--color-cream); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">How do I register for a program?</h4>
                <p style="color: #666;">
                    Simply fill out our contact form or call our programs team. We'll guide you through the registration
                    process and answer any questions you may have.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER SIGNUP -->
<section class="section section-cream">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto; text-align: center; background: var(--color-white); padding: 2.5rem; border-radius: 12px; border: 2px solid var(--color-border);">
            <h3 style="color: var(--color-brown); margin-bottom: 1rem;">Stay Connected</h3>
            <p style="color: #666; margin-bottom: 1.5rem;">
                Subscribe to our newsletter for updates on programs, events, and Sanskrit knowledge shared regularly.
            </p>

            <form style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                <input
                    type="email"
                    placeholder="Enter your email"
                    style="flex: 1; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 4px; font-family: var(--font-primary);"
                    required>
                <button
                    type="submit"
                    style="padding: 0.75rem 1.5rem; background: var(--color-brown); color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;"
                    onmouseover="this.style.background='var(--color-gold)'"
                    onmouseout="this.style.background='var(--color-brown)'">
                    Subscribe
                </button>
            </form>

            <p style="color: #999; font-size: 0.85rem;">
                We respect your privacy. Unsubscribe anytime. See our privacy policy for details.
            </p>
        </div>
    </div>
</section>

<!-- SOCIAL CONNECTIONS (placeholder) -->
<section class="section section-light">
    <div class="container">
        <div style="text-align: center;">
            <h3 style="color: var(--color-brown); margin-bottom: 1.5rem;">Follow Our Journey</h3>
            <p style="color: #666; margin-bottom: 2rem;">
                Connect with us on social media for daily Sanskrit wisdom, program updates, and community highlights
            </p>

            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="#" style="
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    background: var(--color-brown);
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-decoration: none;
                    font-size: 1.5rem;
                    transition: all 0.3s ease;
                "
                    onmouseover="this.style.background='var(--color-gold)'; this.style.transform='scale(1.1)'"
                    onmouseout="this.style.background='var(--color-brown)'; this.style.transform='scale(1)'">
                    f
                </a>
                <a href="#" style="
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    background: var(--color-brown);
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-decoration: none;
                    font-size: 1.5rem;
                    transition: all 0.3s ease;
                "
                    onmouseover="this.style.background='var(--color-gold)'; this.style.transform='scale(1.1)'"
                    onmouseout="this.style.background='var(--color-brown)'; this.style.transform='scale(1)'">
                    𝕏
                </a>
                <a href="#" style="
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    background: var(--color-brown);
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-decoration: none;
                    font-size: 1.5rem;
                    transition: all 0.3s ease;
                "
                    onmouseover="this.style.background='var(--color-gold)'; this.style.transform='scale(1.1)'"
                    onmouseout="this.style.background='var(--color-brown)'; this.style.transform='scale(1)'">
                    📷
                </a>
                <a href="#" style="
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    background: var(--color-brown);
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-decoration: none;
                    font-size: 1.5rem;
                    transition: all 0.3s ease;
                "
                    onmouseover="this.style.background='var(--color-gold)'; this.style.transform='scale(1.1)'"
                    onmouseout="this.style.background='var(--color-brown)'; this.style.transform='scale(1)'">
                    in
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>