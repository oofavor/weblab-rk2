<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoArtify - NFT Collection</title>
    <link rel="stylesheet" href="styles/generic.css">
    <link rel="stylesheet" href="styles/products.css">

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
    <main>
        <h1>CryptoArtify NFT Collection</h1>
        <div class="display-selector">
            <h3>Display Type:</h3>
            <p>Grid
                <a href="products-table.php">Table</a>
            </p>
        </div>

        <div id="nftContainer" class="nft-container">
            <?php
            $query = "SELECT * FROM NFTs";
            $result = mysqli_query($mysql, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="nft-item">
                    <img src="<?php echo $row["img_url"] ?>" alt="NFT 2">
                    <div>
                        <div class="nft-title">
                            <a href="<?php echo "nft.php?id=" . $row['id'] ?>">
                                <?php echo $row['name'] ?>
                            </a>
                        </div>
                        <div class="nft-description">
                            <?php echo $row['short_description'] ?>
                        </div>
                        <div class="nft-price">$
                            <?php echo $row['price'] ?>
                        </div>
                        <div class="nft-status <?php echo $row['avail'] ? "nft-status-available" : "nft-status-sold" ?> ">
                            <?php echo $row['avail'] ? "Available" : "Sold" ?>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button id="<?php echo $row['id'] . "-1" ?>" class="action-button" <?php echo $row['avail'] && isLoggedIn() ? "" : 'disabled' ?>>Add to
                            Cart</button>
                        <button id="<?php echo $row['id'] . "-2" ?>" class=" action-button" <?php echo $row['avail'] && isLoggedIn() ? "" : 'disabled' ?>>Buy
                            Now</button>
                    </div>
                </div>
            <?php } ?>
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

    <script src="nftButton.js"></script>
</body>

</html>