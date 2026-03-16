<?php
$page_title = "Support Samyak";
$current_page = "donation";
$is_subpage = false;
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER HERO -->
<section class="hero" style="background-image: url('assets/images/home_page.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 65vh; display: flex; align-items: center; justify-content: center;">
    <div class="hero-content">
        <h1>Support Sanskrit Heritage</h1>
        <p>Your generous donation helps preserve ancient wisdom and educate future generations</p>
        <a href="#donation-options" class="hero-cta">Make a Donation</a>
    </div>
</section>

<!-- IMPACT SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <p class="section-subheading">Where Your Donation Helps</p>
            <h2>Your Contribution Makes a Difference</h2>
        </div>

        <div class="grid grid-2">
            <!-- Free Classes -->
            <div class="card">
                <div class="card-icon">📚</div>
                <h3>Free Sanskrit Classes</h3>
                <p style="line-height: 1.8;">
                    We provide free Sanskrit language classes to underprivileged students and communities.
                    Your donation enables us to reach more learners and make education accessible to all,
                    regardless of economic background.
                </p>
                <p style="font-size: 0.9rem; color: var(--color-gold); font-weight: 600; margin-top: 1rem;">
                    📊 Reached 500+ students last year
                </p>
            </div>

            <!-- Scholarships -->
            <div class="card">
                <div class="card-icon">🎓</div>
                <h3>Educational Scholarships</h3>
                <p style="line-height: 1.8;">
                    Support deserving students through full and partial scholarships for our comprehensive
                    Sanskrit programs. Help talented individuals advance their learning and become ambassadors
                    of Sanskrit knowledge.
                </p>
                <p style="font-size: 0.9rem; color: var(--color-gold); font-weight: 600; margin-top: 1rem;">
                    💰 50+ scholarships awarded annually
                </p>
            </div>

            <!-- Cultural Programs -->
            <div class="card">
                <div class="card-icon">🎭</div>
                <h3>Cultural Programs & Events</h3>
                <p style="line-height: 1.8;">
                    Fund community events, workshops, and cultural celebrations that showcase Sanskrit heritage
                    and engage the public. These programs create awareness and foster appreciation for our rich traditions.
                </p>
                <p style="font-size: 0.9rem; color: var(--color-gold); font-weight: 600; margin-top: 1rem;">
                    🎪 12+ events hosted annually
                </p>
            </div>

            <!-- Manuscript Preservation -->
            <div class="card">
                <div class="card-icon">📜</div>
                <h3>Manuscript Preservation</h3>
                <p style="line-height: 1.8;">
                    Support our digitization and conservation efforts to preserve ancient Sanskrit manuscripts
                    for future generations. Help us create digital archives ensuring these treasures never disappear.
                </p>
                <p style="font-size: 0.9rem; color: var(--color-gold); font-weight: 600; margin-top: 1rem;">
                    ✓ 250+ manuscripts digitized
                </p>
            </div>
        </div>

        <div class="decorative-motif">◆ ◇ ◆</div>
    </div>
</section>

<!-- DONATION OPTIONS SECTION -->
<section class="section section-cream" id="donation-options">
    <div class="container">
        <div class="section-heading">
            <h2>Make Your Donation</h2>
            <p style="margin-top: 1rem; color: #666; max-width: 700px; margin-left: auto; margin-right: auto;">
                Choose a preset amount or enter your own. Every contribution, no matter the size, helps us continue our mission.
            </p>
        </div>

        <div style="max-width: 700px; margin: 0 auto;">
            <!-- Preset Donation Amounts -->
            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow-md); margin-bottom: 2rem;">
                <h3 style="color: var(--color-brown); margin-bottom: 1.5rem; text-align: center;">Select Amount</h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-bottom: 2rem;">
                    <button type="button" class="donation-button" data-amount="500" onclick="selectAmount(this, 500)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹500</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Supports 1 Free Class</div>
                    </button>

                    <button type="button" class="donation-button" data-amount="1000" onclick="selectAmount(this, 1000)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹1,000</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Supports 2 Free Classes</div>
                    </button>

                    <button type="button" class="donation-button" data-amount="2500" onclick="selectAmount(this, 2500)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹2,500</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Supports 1 Scholarship</div>
                    </button>

                    <button type="button" class="donation-button" data-amount="5000" onclick="selectAmount(this, 5000)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹5,000</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Supports Monthly Programs</div>
                    </button>

                    <button type="button" class="donation-button" data-amount="10000" onclick="selectAmount(this, 10000)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹10,000</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Heritage Patron</div>
                    </button>

                    <button type="button" class="donation-button" data-amount="25000" onclick="selectAmount(this, 25000)" style="padding: 1.5rem; border: 2px solid var(--color-border); background: var(--color-white); border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-size: 1rem;">
                        <div style="color: var(--color-brown); font-weight: 700; font-size: 1.5rem;">₹25,000</div>
                        <div style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Legacy Supporter</div>
                    </button>
                </div>

                <!-- Custom Amount -->
                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 2px solid var(--color-border);">
                    <label style="display: block; color: var(--color-brown); font-weight: 600; margin-bottom: 0.75rem;">Custom Amount</label>
                    <div style="display: flex; gap: 0.5rem;">
                        <span style="display: flex; align-items: center; padding: 0 1rem; background: var(--color-cream); border-radius: 6px 0 0 6px; color: var(--color-brown); font-weight: 600;">₹</span>
                        <input
                            type="number"
                            id="customAmount"
                            placeholder="Enter your amount"
                            min="100"
                            style="flex: 1; padding: 0.75rem; border: 2px solid var(--color-border); border-radius: 0 6px 6px 0; font-size: 1rem; font-family: var(--font-primary);"
                            onchange="selectCustomAmount()">
                    </div>
                </div>

                <!-- Display Selected Amount -->
                <div id="selectedAmountDisplay" style="margin-top: 1.5rem; text-align: center; padding: 1rem; background: var(--color-cream); border-radius: 8px; display: none;">
                    <p style="color: #999; font-size: 0.9rem; margin-bottom: 0.5rem;">Selected Amount</p>
                    <p id="displayAmount" style="color: var(--color-brown); font-weight: 700; font-size: 1.75rem;"></p>
                </div>
            </div>

            <!-- Donation Form -->
            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; box-shadow: var(--shadow-md);">
                <h3 style="color: var(--color-brown); margin-bottom: 1.5rem;">Donation Details</h3>

                <form id="donationForm" style="display: flex; flex-direction: column; gap: 1rem;">
                    <div class="form-group">
                        <label for="donorName" style="display: block; color: var(--color-dark); font-weight: 600; margin-bottom: 0.5rem;">Full Name</label>
                        <input
                            type="text"
                            id="donorName"
                            name="donorName"
                            placeholder="Your name"
                            required
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 6px; font-family: var(--font-primary);">
                    </div>

                    <div class="form-group">
                        <label for="donorEmail" style="display: block; color: var(--color-dark); font-weight: 600; margin-bottom: 0.5rem;">Email Address</label>
                        <input
                            type="email"
                            id="donorEmail"
                            name="donorEmail"
                            placeholder="your@email.com"
                            required
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 6px; font-family: var(--font-primary);">
                    </div>

                    <div class="form-group">
                        <label for="donorPhone" style="display: block; color: var(--color-dark); font-weight: 600; margin-bottom: 0.5rem;">Phone (Optional)</label>
                        <input
                            type="tel"
                            id="donorPhone"
                            name="donorPhone"
                            placeholder="+91 98765 43210"
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 6px; font-family: var(--font-primary);">
                    </div>

                    <div class="form-group">
                        <label style="display: flex; align-items: center; gap: 0.75rem; cursor: pointer; color: var(--color-dark); font-weight: 600;">
                            <input type="checkbox" id="anonymousDonation" name="anonymous" style="width: 18px; height: 18px; cursor: pointer;">
                            Keep my donation anonymous
                        </label>
                    </div>

                    <button
                        type="submit"
                        id="donateButton"
                        onclick="initiatePayment()"
                        style="background: linear-gradient(135deg, var(--color-brown), var(--color-gold)); color: var(--color-white); padding: 1rem; border: none; border-radius: 8px; font-weight: 700; font-size: 1.05rem; cursor: pointer; transition: all 0.3s ease; margin-top: 1rem;"
                        onmouseover="this.style.boxShadow='var(--shadow-lg)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        Donate Now
                    </button>
                </form>

                <p style="color: #999; font-size: 0.85rem; margin-top: 1rem; text-align: center;">
                    We accept all major payment methods. Your donation is secure and encrypted.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- RECOGNITION SECTION -->
<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <h2>Recognition & Impact</h2>
        </div>

        <div class="grid grid-3">
            <div style="text-align: center;">
                <h3 style="color: var(--color-gold); font-size: 2.5rem; margin-bottom: 0.5rem;">₹50+ Lakhs</h3>
                <p style="color: #666; font-weight: 600;">Total Donations Received</p>
                <p style="color: #999; font-size: 0.9rem;">From generous supporters worldwide</p>
            </div>

            <div style="text-align: center;">
                <h3 style="color: var(--color-gold); font-size: 2.5rem; margin-bottom: 0.5rem;">5000+</h3>
                <p style="color: #666; font-weight: 600;">Students Supported</p>
                <p style="color: #999; font-size: 0.9rem;">Through scholarships and free programs</p>
            </div>

            <div style="text-align: center;">
                <h3 style="color: var(--color-gold); font-size: 2.5rem; margin-bottom: 0.5rem;">250+</h3>
                <p style="color: #666; font-weight: 600;">Manuscripts Preserved</p>
                <p style="color: #999; font-size: 0.9rem;">Digitized and archived for posterity</p>
            </div>
        </div>

        <div style="max-width: 800px; margin: 3rem auto 0; padding: 2rem; background: var(--color-cream); border-radius: 12px; border-left: 4px solid var(--color-gold);">
            <h3 style="color: var(--color-brown); margin-bottom: 1rem;">Donor Recognition</h3>
            <p style="color: #666; margin-bottom: 1rem;">
                All donors (except those who choose anonymity) are recognized on our website and annual report.
                Donations of ₹10,000+ receive a personalized thank-you letter and recognition certificate.
            </p>
            <p style="color: #999; font-size: 0.9rem;">
                Samyak is a registered 501(c)(3) nonprofit. Your donation is tax-deductible. Tax ID: [Your Tax ID]
            </p>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2>Donation FAQ</h2>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div style="margin-bottom: 1.5rem; background: var(--color-white); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Is my donation tax-deductible?</h4>
                <p style="color: #666;">
                    Yes, Samyak is a registered nonprofit organization. All donations are tax-deductible.
                    You'll receive a receipt for tax filing purposes.
                </p>
            </div>

            <div style="margin-bottom: 1.5rem; background: var(--color-white); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">How is my donation used?</h4>
                <p style="color: #666;">
                    90% of donations go directly to programs and scholarships. The remaining 10% covers operational costs.
                    We provide detailed annual reports on our financials.
                </p>
            </div>

            <div style="margin-bottom: 1.5rem; background: var(--color-white); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Can I donate monthly?</h4>
                <p style="color: #666;">
                    Yes, we offer recurring monthly donations. Contact us at info@samyak.org to set up a monthly contribution plan.
                </p>
            </div>

            <div style="margin-bottom: 1.5rem; background: var(--color-white); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Can I donate in a different currency?</h4>
                <p style="color: #666;">
                    Yes, we accept donations in multiple currencies including USD, EUR, and GBP.
                    Contact our team for international donation arrangements.
                </p>
            </div>

            <div style="background: var(--color-white); padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--color-brown); margin-bottom: 0.5rem;">Can I make a donation in someone's name?</h4>
                <p style="color: #666;">
                    Yes, you can dedicate your donation in memory of someone or as a gift.
                    Please mention this in the donation form or contact us directly.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    let selectedAmount = null;

    function selectAmount(button, amount) {
        // Remove active state from all buttons
        document.querySelectorAll('.donation-button').forEach(btn => {
            btn.style.borderColor = 'var(--color-border)';
            btn.style.background = 'var(--color-white)';
        });

        // Set active state on clicked button
        button.style.borderColor = 'var(--color-gold)';
        button.style.background = 'var(--color-cream)';

        selectedAmount = amount;
        document.getElementById('customAmount').value = '';
        updateDisplay();
    }

    function selectCustomAmount() {
        const customAmount = document.getElementById('customAmount').value;
        if (customAmount) {
            selectedAmount = parseFloat(customAmount);
            document.querySelectorAll('.donation-button').forEach(btn => {
                btn.style.borderColor = 'var(--color-border)';
                btn.style.background = 'var(--color-white)';
            });
            updateDisplay();
        }
    }

    function updateDisplay() {
        const display = document.getElementById('selectedAmountDisplay');
        const amount = document.getElementById('displayAmount');

        if (selectedAmount) {
            amount.textContent = '₹' + selectedAmount.toLocaleString('en-IN');
            display.style.display = 'block';
        } else {
            display.style.display = 'none';
        }
    }

    function initiatePayment() {
        if (!selectedAmount) {
            alert('Please select or enter a donation amount');
            return;
        }

        const name = document.getElementById('donorName').value;
        const email = document.getElementById('donorEmail').value;

        if (!name || !email) {
            alert('Please fill in your name and email');
            return;
        }

        // Show notification
        const message = `Thank you for your generous donation of ₹${selectedAmount.toLocaleString('en-IN')}!
Payment gateway integration would process here.`;
        alert(message);

        // In production, integrate with Razorpay, Stripe, or similar payment gateway
        console.log('Donation Details:', {
            amount: selectedAmount,
            name: name,
            email: email,
            phone: document.getElementById('donorPhone').value,
            anonymous: document.getElementById('anonymousDonation').checked
        });
    }
</script>

<?php include 'includes/footer.php'; ?>