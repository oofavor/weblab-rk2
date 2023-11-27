<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoArtify - NFT Details</title>
    <link rel="stylesheet" href="styles/generic.css">
    <link rel="stylesheet" href="styles/nft.css">

    <?php include('db.php'); ?>
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
        <?php
        $nftid = $_GET['id'];
        $query = "SELECT * FROM NFTs WHERE id='$nftid'";
        $result = mysqli_query($mysql, $query);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <h1>
                <?php echo $row['name'] ?> NFT Details
            </h1>

            <div class="nft-details">
                <div>
                    <img src="<?php echo $row['img_url'] ?>" alt="NFT 1">
                    <?php
                    $id1 = $row['id'];
                    echo isLoggedIn() ? "
                    <div class='action-buttons'>
                        <button id='$id1-1'>Add to Cart</button>
                        <button id='$id1-2'>Buy Now</button>
                    </div>
                    " : ''
                        ?>
                </div>
                <div class="nft-info">
                    <div class="nft-title">
                        Title:
                        <?php echo $row['name'] ?>
                    </div>
                    <div class="nft-price">Price: $
                        <?php echo $row['price'] ?>
                    </div>
                    <div class="nft-description">
                        <?php echo $row['description'] ?>
                    </div>
                    <div class="nft-status nft-status-available">Availablity:
                        <?php echo $row['avail'] ? 'Yes' : 'No' ?>
                    </div>
                    <div class="nft-status nft-status-available">Owner:
                        <?php echo $row['user_id'] ? $row['user_id'] : 'No' ?>
                    </div>
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