<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Footer Section 1: About -->
        <div class="footer-section">
            <h3 class="footer-heading">About Samyak</h3>
            <p>Samyak is a dedicated centre for Sanskrit heritage and knowledge preservation, bridging ancient wisdom with contemporary education.</p>
            <!-- <div class="decorative-motif">◆ ◇ ◆</div> -->
        </div>

        <!-- Footer Section 2: Quick Links -->
        <div class="footer-section">
            <h3 class="footer-heading">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../index.php' : 'index.php'; ?>">Home</a></li>
                <li><a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../about.php' : 'about.php'; ?>">About Us</a></li>
                <li><a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../programs.php' : 'programs.php'; ?>">Programs</a></li>
                <li><a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../gallery.php' : 'gallery.php'; ?>">Gallery</a></li>
                <li><a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../publications.php' : 'publications.php'; ?>">Publications</a></li>
            </ul>
        </div>

        <!-- Footer Section 3: Contact -->
        <div class="footer-section">
            <h3 class="footer-heading">Contact</h3>
            <p><strong>Address:</strong><br>
                123 Heritage Lane<br>
                Sanskrit Valley, India 560001</p>
            <p><strong>Email:</strong> info@samyak.org</p>
            <p><strong>Phone:</strong> +91 (0)80 1234 5678</p>
        </div>

        <!-- Footer Section 4: Sanskrit Quote -->
        <div class="footer-section">
            <h3 class="footer-heading devanagari">संस्कृत अमृतम्</h3>
            <p class="sanskrit-quote">"ज्ञानं शक्तिः"</p>
            <p class="quote-translation">Knowledge is Power</p>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; 2026 Samyak - Centre for Sanskrit Heritage & Knowledge. All rights reserved.</p>
        <p>Preserving Ancient Wisdom | Inspiring Future Generations</p>
    </div>

    <!-- Decorative Footer Top Border 
    <div class="footer-divider"></div>
</footer> -->

    <!-- JavaScript -->
    <script src="<?php echo (isset($is_subpage) && $is_subpage) ? '../assets/js/script.js' : 'assets/js/script.js'; ?>"></script>

    </body>

    </html>