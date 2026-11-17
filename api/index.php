
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2025</div>
                    <h3 class="timeline-title">Certificat en Développement Digital</h3>
                    <p class="timeline-subtitle">Centre Digital Solicode — Tanger</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2023 — 2024</div>
                    <h3 class="timeline-title">Baccalauréat Scientifique</h3>
                    <p class="timeline-subtitle">Option Sciences Physiques — Mention Bien</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Me Contacter</h2>
            <p>Un projet, une question ou une opportunité ? N'hésitez pas à me laisser un message.</p>
        </div>

        <div class="contact-card-wrapper">
            <div>
                <h3 style="font-size:1.5rem;font-weight:700;">Restons en contact</h3>
                <p style="color:var(--text-muted);margin-top:.5rem;">
                    Je suis disponible pour toute opportunité de stage ou de collaboration académique.
                </p>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div><div class="contact-label">Email</div><div class="contact-value">contact@mariamtahayekt.dev</div></div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-brands fa-github"></i></div>
                        <div><div class="contact-label">GitHub</div><div class="contact-value">github.com/mariamtahayekt</div></div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="fa-brands fa-linkedin-in"></i></div>
                        <div><div class="contact-label">LinkedIn</div><div class="contact-value">linkedin.com/in/mariamtahayekt</div></div>
                    </div>
                </div>
            </div>

            <form onsubmit="event.preventDefault(); alert('Message envoyé avec succès!');">
                <div class="form-group">
                    <label class="form-label">Nom complet</label>
                    <input type="text" class="form-control" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Adresse email</label>
                    <input type="email" class="form-control" placeholder="votre@email.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" placeholder="Votre message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
                    <i class="fa-solid fa-paper-plane"></i> Envoyer
                </button>
            </form>
        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <div class="container">
        <p>© 2026 Mariam Tahayekt — Tous droits réservés.</p>
    </div>
</footer>

<!-- ================= JAVASCRIPT ================= -->
<script>
// Menu mobile
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const navLinks = document.getElementById('navLinks');

function setMenuIcon(open) {
    const icon = mobileMenuBtn.querySelector('i');
    icon.classList.toggle('fa-xmark', open);
    icon.classList.toggle('fa-bars', !open);
}

mobileMenuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    setMenuIcon(navLinks.classList.contains('active'));
});

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        setMenuIcon(false);
    });
});

// Filtre des catégories TD & TP
const filterButtons = document.querySelectorAll('.filter-btn');
const catBlocks = document.querySelectorAll('.cat-block');

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const f = btn.dataset.filter;
        filterButtons.forEach(b => b.classList.toggle('active', b === btn));
        catBlocks.forEach(block => {
            block.classList.toggle('hidden', f !== 'all' && block.dataset.cat !== f);
        });
    });
});
</script>

</body>
</html>