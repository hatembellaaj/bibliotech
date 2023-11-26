document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.getElementById('contactForm');
    contactForm.onsubmit = function (e) {
        var firstName = contactForm['first_name'].value;
        var email = contactForm['email'].value;

        if (firstName.length > 10) {
            alert("Le prénom doit contenir moins de 10 caractères.");
            e.preventDefault();
        }

        if (!email.includes('@')) {
            alert("Veuillez entrer une adresse e-mail valide.");
            e.preventDefault();
        }
    };
});
