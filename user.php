<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="styles/generic.css">
    <link rel="stylesheet" href="styles/user.css">
    <?php
    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($email != null) {
            registerUser($email, $username, $password);
        } else {
            loginUser($username, $password);
        }
    } else if (!isLoggedIn()) {
        header("location: login.html");
        die();
    }
    ?>
</head>

<body>
    <nav>
        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php">About</a>
        <div class="user-tab">
            <a href="user.php" onclick="deleteAllCookies()">
                Logout
            </a>
        </div>
    </nav>
    <main>
        <div class="user-container">
            <?php
            $userid = $_SESSION['userid'];
            $query = "SELECT * FROM Users WHERE id='$userid'";
            $result = mysqli_query($mysql, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <h2>Welcome, John Doe!</h2>
                <p>Email:
                    <?php
                    echo $row['email'];
                    ?>
                </p>
                <p>Username:
                    <?php echo $row['username'];
            }
            ?>
            </p>
            <p>Role: Member</p>
        </div>
        <h1>Bought NFTs</h1>
        <div class="nft-container">
            <?php
            $userid = $_SESSION['userid'];
            $query = "SELECT * FROM NFTs WHERE user_id='$userid'";
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
                    </div>
                </div>
            <?php } ?>
        </div>

        <h1>NTFs Cart</h1>
        <div class="nft-container">
            <?php
            $userid = $_SESSION['userid'];
            $query = "SELECT
    ShoppingCart.id,
    NFTs.name AS name,
    NFTs.price AS price,
    NFTs.img_url AS img_url,
    NFTs.short_description AS short_description,
    NFTs.avail AS avail,
    NFTs.user_id AS user_id,
    Users.id AS userid
FROM
    ShoppingCart

JOIN
    NFTs ON ShoppingCart.nft_id = NFTs.id
JOIN
    Users ON ShoppingCart.user_id = Users.id AND NFTs.avail
";
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
                    </div>
                    <div class="action-buttons">
                        <button id="<?php echo $row['id'] . "-1" ?>" class="action-button" <?php echo $row['avail'] && isLoggedIn() ? "" : 'disabled' ?>>Add to
                            Cart</button>
                        <button id="<?php echo $row['id'] . "-2" ?>" class=" action-button" <?php echo $row['avail'] && isLoggedIn() ? "" : 'disabled' ?>>Buy
                            Now</button>
                    </div>
                </div>
            <?php } ?>
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
    <script src="nftButton.js"></script>
</body>

</html>