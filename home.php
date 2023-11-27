<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Beautiful Website</title>
    <link rel="stylesheet" href="styles/generic.css">
    <link rel="stylesheet" href="styles/home.css">
    <?php include("db.php") ?>
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
    <main class="main">
        <h1>Welcome to CryptoArtify</h1>
        <div class="about">
            <div id="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="https://nonfungible.com/_next/image?url=http%3A%2F%2Fdocker.api.nonfungible.com.service%3A3333%2Fasset%2Fmedia%2Fmedium%2Fcryptopunks%2FWPUNKS%2F488%3Findex%3D1&w=1920&q=75"
                            alt="NFT 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://nonfungible.com/_next/image?url=http%3A%2F%2Fdocker.api.nonfungible.com.service%3A3333%2Fasset%2Fmedia%2Fmedium%2Fartblocks%2FBLOCKS%2F78000525%3Findex%3D1&w=1920&q=75"
                            alt="NFT 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://nonfungible.com/_next/image?url=http%3A%2F%2Fdocker.api.nonfungible.com.service%3A3333%2Fasset%2Fmedia%2Fmedium%2Fcryptopunks%2FWPUNKS%2F9478%3Findex%3D0&w=1920&q=75"
                            alt="NFT 3">
                    </div>
                </div>
                <button id="prev">❮</button>
                <button id="next">❯</button>
            </div>
            <div class="about-section">
                <h2>About Us</h2>
                <p>
                    CryptoArtify is at the forefront of the digital art revolution, providing a unique platform for
                    artists
                    and art enthusiasts alike. Established with a vision to bridge the gap between creativity and
                    technology, we specialize in the creation, curation, and sale of Non-Fungible Tokens (NFTs).
                </p>
                <p>
                    Our mission is to empower artists by offering them a decentralized space to showcase their digital
                    masterpieces as NFTs. Through the use of blockchain technology, we ensure the authenticity and
                    uniqueness of each creation, fostering a secure and transparent environment for both creators and
                    collectors.
                </p>
                <p>
                    What sets CryptoArtify apart is our commitment to supporting artists on their creative journey. We
                    believe in fair compensation for artists, and our platform provides a decentralized marketplace
                    where
                    their work receives the recognition it deserves.
                </p>
                <p>
                    Explore our diverse collection of digital art, ranging from illustrations and animations to virtual
                    reality experiences. Join us in revolutionizing the art industry and creating a global community
                    where
                    innovation and creativity thrive.
                </p>
            </div>
        </div>
        <div class="about">
            <div class="about-section">
                <h2>Discover Unique Digital Art with CryptoArtify</h2>
                <p>
                    At CryptoArtify, we bring you an unparalleled collection of digital art in the form of Non-Fungible
                    Tokens (NFTs). Our platform serves as a virtual gallery, showcasing the creativity and innovation of
                    talented artists from around the world.
                </p>

                <p>
                    Each NFT on CryptoArtify is a one-of-a-kind masterpiece, securely stored and verified on the
                    blockchain. We offer a diverse range of digital artworks, spanning various genres and styles,
                    including illustrations, animations, virtual reality experiences, and more.
                </p>

                <p>
                    As a collector, you have the opportunity to own a piece of digital history. Our artists pour their
                    passion into every creation, and by acquiring an NFT, you are not just buying art; you are
                    supporting the artists directly. CryptoArtify is committed to providing fair compensation to artists
                    and fostering a global community where art enthusiasts and creators connect in the decentralized
                    space.
                </p>

                <p>
                    Explore our curated selection, find the perfect piece that resonates with you, and become a part of
                    the digital art revolution. Join CryptoArtify in celebrating the convergence of art and technology,
                    where each NFT tells a unique story and holds intrinsic value in the digital realm.
                </p>

            </div>
            <div>
                <img src="https://nonfungible.com/_next/image?url=http%3A%2F%2Fdocker.api.nonfungible.com.service%3A3333%2Fasset%2Fmedia%2Fmedium%2Fcryptopunks%2FWPUNKS%2F488%3Findex%3D1&w=1920&q=75"
                    alt="NFT 1">
            </div>
        </div>

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


    <script src="home.js"></script>
</body>

</html>