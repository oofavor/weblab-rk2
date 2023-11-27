<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoArtify - NFT Collection</title>
    <link rel="stylesheet" href="styles/generic.css">
    <link rel="stylesheet" href="styles/products-table.css">
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
        <h1>CryptoArtify NFT Collection</h1>

        <div class="display-selector">
            <h3>Display Type:</h3>
            <p>
                <a href="products.php">Grid</a>
                Table
            </p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM NFTs";
                $result = mysqli_query($mysql, $query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>
                            <img src="<?php echo $row['img_url'] ?>" alt="NFT 1">
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['short_description'] ?>
                        </td>
                        <td>$
                            <?php echo $row['price'] ?>
                        </td>
                        </td>
                        <td class="nft-status nft-status-<?php echo $row['avail'] ? "available" : "sold" ?>">
                            <?php echo $row['avail'] ? "Available" : "Sold" ?>
                        </td>
                        <td class="action-buttons">
                            <button id="<?php echo $row['id'] . "-1" ?>" <?php echo $row['avail'] && isLoggedIn() ? "" : "disabled" ?>>Add to Cart</button>
                            <button id="<?php echo $row['id'] . "-2" ?>" <?php echo $row['avail'] && isLoggedIn() ? "" : "disabled" ?>>Buy Now</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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