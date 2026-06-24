/* ==========================================================================
   MINIMALIST BLACK & NAVY PORTFOLIO - CORE INTERACTIVE JS
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

    // 1. HEADER SCROLL EFFECT
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. MOBILE MENU TOGGLE
    const menuToggleBtn = document.getElementById('menu-toggle-btn');
    const navMenuContainer = document.getElementById('nav-menu-container');
    const menuToggleIcon = menuToggleBtn.querySelector('i');

    menuToggleBtn.addEventListener('click', () => {
        navMenuContainer.classList.toggle('open');
        
        // Swap menu icon between bars & close (times)
        if (navMenuContainer.classList.contains('open')) {
            menuToggleIcon.className = 'fa-solid fa-xmark';
        } else {
            menuToggleIcon.className = 'fa-solid fa-bars';
        }
    });

    // Close menu when a link is clicked
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenuContainer.classList.remove('open');
            menuToggleIcon.className = 'fa-solid fa-bars';
        });
    });

    // 3. TEXT SLIDE ANIMATION (LEFT TO RIGHT)
    const slideTextElement = document.getElementById('slide-text');
    const words = ['Aplikasi Web Efisien', 'Backend Performa Tinggi', 'Analisis Data Akurat', 'Sistem Skala Penuh'];
    let wordIndex = 0;

    function rotateText() {
        if (!slideTextElement) return;
        
        // Slide Out (moves from center to right)
        slideTextElement.classList.remove('slide-in');
        slideTextElement.classList.add('slide-out');
        
        setTimeout(() => {
            // Change word after it slides out of view
            wordIndex = (wordIndex + 1) % words.length;
            slideTextElement.textContent = words[wordIndex];
            
            // Slide In (enters from left to center)
            slideTextElement.classList.remove('slide-out');
            slideTextElement.classList.add('slide-in');
        }, 500); // matches the CSS slide animation duration
    }

    if (slideTextElement) {
        slideTextElement.textContent = words[0];
        slideTextElement.classList.add('slide-in');
        setInterval(rotateText, 3500);
    }

    // 4. SCROLL SPY (ACTIVE LINK ON SCROLL)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let scrollPosition = window.scrollY + 100; // offset for sticky navbar

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
    // 5. CLIENT-SIDE CONTACT FORM SUBMISSION (MOCK ACTION)
    const contactForm = document.getElementById('portfolio-contact-form');
    const contactAlert = document.getElementById('contact-alert');
    const alertMessage = contactAlert.querySelector('.alert-message');
    const alertCloseBtn = document.getElementById('alert-close-btn');
    const submitBtn = document.getElementById('contact-submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const spinner = submitBtn.querySelector('.loading-spinner');

    if (alertCloseBtn) {
        alertCloseBtn.addEventListener('click', () => {
            contactAlert.classList.add('hidden');
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Reset previous errors and alert
            contactAlert.className = 'alert hidden';
            document.querySelectorAll('.error-msg').forEach(msg => msg.textContent = '');
            
            // Client-side validation
            const nameVal = document.getElementById('name').value.trim();
            const emailVal = document.getElementById('email').value.trim();
            const subjectVal = document.getElementById('subject').value.trim();
            const messageVal = document.getElementById('message').value.trim();
            
            let hasErrors = false;
            
            if (!nameVal) {
                document.getElementById('error-name').textContent = 'Nama wajib diisi.';
                hasErrors = true;
            }
            
            if (!emailVal) {
                document.getElementById('error-email').textContent = 'Email wajib diisi.';
                hasErrors = true;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)) {
                document.getElementById('error-email').textContent = 'Format email tidak valid.';
                hasErrors = true;
            }
            
            if (!messageVal) {
                document.getElementById('error-message').textContent = 'Pesan wajib diisi.';
                hasErrors = true;
            } else if (messageVal.length < 10) {
                document.getElementById('error-message').textContent = 'Pesan minimal terdiri dari 10 karakter.';
                hasErrors = true;
            }
            
            if (hasErrors) {
                contactAlert.className = 'alert alert-danger';
                alertMessage.textContent = 'Harap periksa kembali inputan Anda.';
                contactAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }

            // Disable button and show spinner to simulate backend processing
            submitBtn.disabled = true;
            btnText.classList.add('hidden');
            spinner.classList.remove('hidden');

            // Simulate network latency (1 second)
            setTimeout(() => {
                // Re-enable button and hide spinner
                submitBtn.disabled = false;
                btnText.classList.remove('hidden');
                spinner.classList.add('hidden');
                
                // Show Success Notification
                contactAlert.className = 'alert alert-success';
                alertMessage.textContent = 'Pesan Anda berhasil dikirim! Terima kasih telah menghubungi saya.';
                contactForm.reset();
                
                // Scroll to the alert for visibility
                contactAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 1000);
        });
    }
    // 6. EXPERIENCE TAB SWITCHING
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContentPanels = document.querySelectorAll('.tab-content-panel');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetTab = btn.getAttribute('data-tab');

            // Set active button
            tabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Set active content panel with transition class
            tabContentPanels.forEach(panel => {
                panel.classList.remove('active');
                if (panel.getAttribute('id') === targetTab) {
                    panel.classList.add('active');
                }
            });
        });
    });

});
