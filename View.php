<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <h1>Bibliotheca</h1>
        </div>
        <nav class="site-nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <!-- Vous pouvez ajouter un sous-menu ici si nécessaire -->
                <li><a href="contact.html">CONTACT US</a></li>
                <!-- Ajoutez les autres éléments de menu ici -->
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search...">
            <button type="submit">🔍</button>
        </div>
    </header>



    <div class="contact-form">
        <form id="contactForm" action="Controller.php" method="post">
            <input type="text" name="first_name" placeholder="Prénom" required>
            <input type="text" name="last_name" placeholder="Nom" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
