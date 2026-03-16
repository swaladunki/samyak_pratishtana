<?php
$page_title = "Programs";
$current_page = "programs";
$is_subpage = false;
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="section section-cream" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-heading">
            <p class="section-subheading">Our Programs</p>
            <h2>Learn Sanskrit & Heritage</h2>
        </div>
        <p style="text-align: center; color: #666; font-size: 1.1rem; max-width: 700px; margin: 0 auto;">
            Discover our comprehensive programs designed for learners at all levels
        </p>
    </div>
</section>

<!-- PROGRAMS GRID -->
<section class="section section-light">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 3rem;">
            <!-- Sanskrit Classes -->
            <div class="program-card">
                <div class="program-icon">📚</div>
                <h3>Sanskrit Language Classes</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Comprehensive language courses from beginner to advanced levels. Learn grammar, vocabulary, and classical texts.
                </p>
                <div style="margin-bottom: 1rem;">
                    <h5 style="color: var(--color-brown); margin-bottom: 0.5rem;">Program Levels:</h5>
                    <ul style="list-style: none; color: #666; font-size: 0.95rem;">
                        <li>✓ Beginner - Foundation & Basics</li>
                        <li>✓ Intermediate - Grammar & Texts</li>
                        <li>✓ Advanced - Classical Literature</li>
                        <li>✓ Expert - Scholarly Research</li>
                    </ul>
                </div>
                <p style="font-size: 0.9rem; color: #999;">
                    <strong>Duration:</strong> 3-12 months<br>
                    <strong>Classes:</strong> Weekly sessions (online & offline)
                </p>

                <div style="margin-top: 1rem; display:flex; gap:0.75rem; flex-wrap:wrap;">
                    <!-- Link to the Sanskrit classes subpage (place sanskrit-classes.php in the same folder) -->
                    <a href="sanskrit-classes.php" class="btn btn-primary" role="button">View Course</a>
                    <a href="enroll.php" class="btn btn-secondary" role="button">Enroll Now</a>
                </div>
            </div>

            <!-- Chanting & Recitation -->
            <div class="program-card">
                <div class="program-icon">🎵</div>
                <h3>Vedic Chanting & Recitation</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Master the sacred art of Vedic chanting, proper Sanskrit pronunciation, and phonetic precision.
                </p>
                <div style="margin-bottom: 1rem;">
                    <h5 style="color: var(--color-brown); margin-bottom: 0.5rem;">Specializations:</h5>
                    <ul style="list-style: none; color: #666; font-size: 0.95rem;">
                        <li>✓ Rigveda Chanting</li>
                        <li>✓ Yajurveda Recitation</li>
                        <li>✓ Samaveda Melodies</li>
                        <li>✓ Mantra & Bhajan Singing</li>
                    </ul>
                </div>
                <p style="font-size: 0.9rem; color: #999;">
                    <strong>Duration:</strong> 6-18 months<br>
                    <strong>Format:</strong> Individual & group sessions
                </p>
            </div>

            <!-- Heritage Workshops -->
            <div class="program-card">
                <div class="program-icon">🎨</div>
                <h3>Heritage Workshops</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Interactive workshops exploring classical arts, philosophy, and cultural practices rooted in Sanskrit traditions.
                </p>
                <div style="margin-bottom: 1rem;">
                    <h5 style="color: var(--color-brown); margin-bottom: 0.5rem;">Workshop Topics:</h5>
                    <ul style="list-style: none; color: #666; font-size: 0.95rem;">
                        <li>✓ Classical Dance & Performance</li>
                        <li>✓ Philosophy & Spirituality</li>
                        <li>✓ Ayurveda & Traditional Knowledge</li>
                        <li>✓ Sacred Art Forms</li>
                    </ul>
                </div>
                <p style="font-size: 0.9rem; color: #999;">
                    <strong>Duration:</strong> Intensive weekends & online sessions<br>
                    <strong>Frequency:</strong> Monthly programs
                </p>
            </div>

            <!-- Research & Manuscripts -->
            <div class="program-card">
                <div class="program-icon">🔬</div>
                <h3>Research & Manuscript Studies</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Advanced studies in manuscript analysis, textual criticism, and contemporary Sanskrit research methodologies.
                </p>
                <div style="margin-bottom: 1rem;">
                    <h5 style="color: var(--color-brown); margin-bottom: 0.5rem;">Research Areas:</h5>
                    <ul style="list-style: none; color: #666; font-size: 0.95rem;">
                        <li>✓ Manuscript Paleography</li>
                        <li>✓ Textual Editing</li>
                        <li>✓ Comparative Philology</li>
                        <li>✓ Digital Humanities</li>
                    </ul>
                </div>
                <p style="font-size: 0.9rem; color: #999;">
                    <strong>Duration:</strong> 9-24 months<br>
                    <strong>Format:</strong> Graduate level programs
                </p>
            </div>
        </div>

        <div class="decorative-motif">◆ ◇ ◆</div>
    </div>
</section>

<!-- PROGRAM FEATURES -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2>Why Choose Our Programs?</h2>
        </div>

        <div class="grid grid-3">
            <div class="card">
                <div class="card-icon">👨‍🏫</div>
                <h3>Expert Instructors</h3>
                <p>Learn from experienced Sanskrit scholars and cultural practitioners with deep expertise and passion.</p>
            </div>

            <div class="card">
                <div class="card-icon">🌍</div>
                <h3>Global Community</h3>
                <p>Connect with like-minded students from around the world and build lasting learning relationships.</p>
            </div>

            <div class="card">
                <div class="card-icon">📱</div>
                <h3>Flexible Learning</h3>
                <p>Choose between online classes, in-person sessions, or hybrid formats that suit your schedule.</p>
            </div>

            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Certification</h3>
                <p>Receive recognized certificates upon completion of programs validated by our institution.</p>
            </div>

            <div class="card">
                <div class="card-icon">📚</div>
                <h3>Resource Library</h3>
                <p>Access exclusive study materials, recordings, and digitized manuscripts for continuous learning.</p>
            </div>

            <div class="card">
                <div class="card-icon">🎯</div>
                <h3>Personalized Guidance</h3>
                <p>Receive individualized feedback and mentoring throughout your learning journey with us.</p>
            </div>
        </div>
    </div>
</section>

<!-- COURSE SYLLABUS SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <h2>Sample Curriculum - Sanskrit Basics</h2>
        </div>

        <div style="max-width: 800px; margin: 0 auto; background: var(--color-cream); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-gold);">
            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Module 1: Devanagari Script & Fundamentals</h4>
                <p style="color: #666; font-size: 0.95rem;">Introduction to Devanagari alphabet, pronunciation, and basic writing</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Module 2: Sanskrit Phonetics & Grammar</h4>
                <p style="color: #666; font-size: 0.95rem;">Detailed study of Sanskrit phonetics (Shiksha) and fundamental grammar rules</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Module 3: Vocabulary & Simple Sentences</h4>
                <p style="color: #666; font-size: 0.95rem;">Building vocabulary and constructing basic Sanskrit sentences</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Module 4: Classical Texts Introduction</h4>
                <p style="color: #666; font-size: 0.95rem;">Introduction to classical Sanskrit literature and famous texts</p>
            </div>

            <div>
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Module 5: Conversation & Composition</h4>
                <p style="color: #666; font-size: 0.95rem;">Practical Sanskrit conversation skills and creative composition</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2>Student Testimonials</h2>
        </div>

        <div class="grid grid-2">
            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-gold); box-shadow: var(--shadow-md);">
                <p style="margin-bottom: 1rem; color: #666; font-style: italic;">
                    "The Sanskrit classes at Samyak have been transformative. The instructors are incredibly knowledgeable and supportive. I've made friends from all over the world and truly feel part of a learning community."
                </p>
                <h4 style="color: var(--color-brown); margin-bottom: 0.25rem;">Sophia Martin</h4>
                <p style="color: #999; font-size: 0.9rem;">Student, Intermediate Sanskrit - United States</p>
            </div>

            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-gold); box-shadow: var(--shadow-md);">
                <p style="margin-bottom: 1rem; color: #666; font-style: italic;">
                    "The Vedic chanting program has connected me deeply with my heritage. The precision and care with which the teachers explain pronunciation and meaning is exceptional."
                </p>
                <h4 style="color: var(--color-brown); margin-bottom: 0.25rem;">Arjun Desai</h4>
                <p style="color: #999; font-size: 0.9rem;">Student, Vedic Chanting - India</p>
            </div>

            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-gold); box-shadow: var(--shadow-md);">
                <p style="margin-bottom: 1rem; color: #666; font-style: italic;">
                    "As a researcher, I found the manuscript studies program invaluable. Access to digitized texts and guidance from experts in textual criticism has significantly advanced my work."
                </p>
                <h4 style="color: var(--color-brown); margin-bottom: 0.25rem;">Dr. Elena Rodriguez</h4>
                <p style="color: #999; font-size: 0.9rem;">PhD Researcher, Comparative Literature - Spain</p>
            </div>

            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--color-gold); box-shadow: var(--shadow-md);">
                <p style="margin-bottom: 1rem; color: #666; font-style: italic;">
                    "The heritage workshops opened my eyes to the richness of Sanskrit philosophy and classical arts. It's a holistic approach to learning that I hadn't found anywhere else."
                </p>
                <h4 style="color: var(--color-brown); margin-bottom: 0.25rem;">James Thompson</h4>
                <p style="color: #999; font-size: 0.9rem;">Student, Heritage Workshops - Canada</p>
            </div>
        </div>
    </div>
</section>

<!-- ENROLLMENT SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <h2>Ready to Enroll?</h2>
        </div>

        <div style="max-width: 600px; margin: 0 auto; background: var(--color-cream); padding: 2rem; border-radius: 12px; text-align: center;">
            <h3 style="color: var(--color-brown); margin-bottom: 1rem;">Next Batch Starts:</h3>
            <p style="color: #666; font-size: 1.1rem; margin-bottom: 2rem;">
                January 15, 2025
            </p>
            <p style="color: #666; margin-bottom: 2rem;">
                Limited seats available. Early registration recommended to secure your spot in your preferred program.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary">Enroll Now</a>
                <a href="contact.php" class="btn btn-secondary">Request Information</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>