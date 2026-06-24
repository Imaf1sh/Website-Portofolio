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

    // 5. AJAX CONTACT FORM SUBMISSION
    const contactForm = document.getElementById('portfolio-contact-form');
    const contactAlert = document.getElementById('contact-alert');
    const alertMessage = contactAlert.querySelector('.alert-message');
    const alertCloseBtn = document.getElementById('alert-close-btn');
    const submitBtn = document.getElementById('contact-submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const spinner = submitBtn.querySelector('.loading-spinner');

    // Close alert click
    alertCloseBtn.addEventListener('click', () => {
        contactAlert.classList.add('hidden');
    });

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Reset previous errors and alert
        contactAlert.className = 'alert hidden';
        document.querySelectorAll('.error-msg').forEach(msg => msg.textContent = '');
        
        // Disable button and show spinner
        submitBtn.disabled = true;
        btnText.classList.add('hidden');
        spinner.classList.remove('hidden');

        // Form action & method
        const url = contactForm.action;
        const formData = new FormData(contactForm);

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await response.json();

            if (response.ok) {
                // Success submission
                contactAlert.className = 'alert alert-success';
                alertMessage.textContent = data.message;
                contactForm.reset();
            } else if (response.status === 422) {
                // Validation error
                contactAlert.className = 'alert alert-danger';
                alertMessage.textContent = 'Harap periksa kembali inputan Anda.';
                
                // Set individual error messages
                if (data.errors) {
                    Object.keys(data.errors).forEach(key => {
                        const errorMsgElement = document.getElementById(`error-${key}`);
                        if (errorMsgElement) {
                            errorMsgElement.textContent = data.errors[key][0];
                        }
                    });
                }
            } else {
                // Server or other error
                contactAlert.className = 'alert alert-danger';
                alertMessage.textContent = data.message || 'Terjadi kesalahan pada server. Silakan coba lagi nanti.';
            }
        } catch (error) {
            console.error('Submission Error:', error);
            contactAlert.className = 'alert alert-danger';
            alertMessage.textContent = 'Gagal mengirim pesan. Silakan periksa koneksi internet Anda.';
        } finally {
            // Re-enable button and hide spinner
            submitBtn.disabled = false;
            btnText.classList.remove('hidden');
            spinner.classList.add('hidden');
            
            // Scroll to the alert for visibility
            contactAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });

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
