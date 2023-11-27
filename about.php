<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - CryptoArtify</title>
  <link rel="stylesheet" href="styles/generic.css" />
  <style>
    h1,
    h2 {
      color: #3498db;
    }

    p {
      line-height: 1.6;
    }

    main {
      margin-inline: 10px;
      min-height: calc(100vh - 50px);
    }
  </style>
  <?php include("db.php"); ?>
</head>

<body>
  <nav>
    <a href="home.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <div class="user-tab">
      <a href="
                <?php
                echo isLoggedIn() ? "user.php" : "login.html";
                ?>
            ">
        <?php
        echo isLoggedIn() ? $_SESSION['username'] : "Login";
        ?>
      </a>
    </div>
  </nav>
  <main>
    <h1>Welcome to CryptoArtify</h1>

    <h2>About Us</h2>

    <p>
      CryptoArtify is a pioneering platform at the intersection of art and
      technology, dedicated to bringing the world of digital art to a new level.
      We specialize in the creation, curation, and sale of unique Non-Fungible
      Tokens (NFTs), allowing artists and collectors to connect in a
      decentralized and borderless ecosystem.
    </p>

    <h2>Our Mission</h2>

    <p>
      At CryptoArtify, our mission is to empower artists by providing them with
      a platform to showcase their digital masterpieces as NFTs. We believe in
      the transformative power of blockchain technology and aim to revolutionize
      the art industry by fostering a community where creativity is valued, and
      artists are fairly compensated for their work.
    </p>

    <h2>Why Choose CryptoArtify?</h2>

    <p>
      <strong>Innovative Technology:</strong> We leverage cutting-edge
      blockchain technology to ensure the authenticity and uniqueness of each
      NFT, providing a secure and transparent environment for both artists and
      collectors.
    </p>

    <p>
      <strong>Diverse Collection:</strong> Explore a diverse collection of
      digital art, ranging from illustrations and animations to virtual reality
      experiences. Our platform is a treasure trove for art enthusiasts seeking
      one-of-a-kind pieces.
    </p>

    <p>
      <strong>Supporting Artists:</strong> We are committed to supporting
      artists on their creative journey. CryptoArtify provides a fair and
      decentralized marketplace where artists receive the recognition and
      compensation they deserve.
    </p>

    <h2>Contact Us</h2>

    <p>
      Have questions or feedback? We'd love to hear from you! Reach out to us at
      <a href="mailto:info@cryptoartify.com">info@cryptoartify.com</a> or follow
      us on social media for the latest updates.
    </p>
  </main>
  <footer>
    <div>
      <p>&copy; 2023 CryptoArtify. All rights reserved.</p>
    </div>
    <div>
      <p>Address: 123 Art Street, Crypto City, DigitalLand</p>
      <p>Email: info@cryptoartify.com</p>
      <p>Phone: +1 (555) 123-4567</p>
    </div>
    <div>
      <p>Follow Us:</p>
      <a href="#" target="">Facebook</a> |
      <a href="#" target="">Twitter</a> |
      <a href="#" target="">Instagram</a>
    </div>
    <div>
      <p>Privacy Policy | Terms of Service</p>
    </div>
  </footer>
</body>

</html>