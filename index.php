
<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=shopping-cart", $username, $password);
} catch (PDOException $e) {
}

$stmt = $dbh->prepare("SELECT * FROM products ORDER BY id ASC");
$stmt->execute(array('id' => $_GET['product']));
$results = $stmt->fetchAll();
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="stylesheet.css" type="text/css">
            <!-- fonts -->
            <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
            <!-- End Fonts -->
            <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
            <script src="jQuery.js"></script>
            <script rel="script" src="scripts.js" type="text/javascript"></script>
            <title>
                Boats and Rows
            </title>
        </head>
        <body>
            <div id="container">
                <div id="nav">
                    <div id="brand">
                        <div id="logo">

                        </div>
                        <div id="title">
                            <h1>
                                Boats and Rows
                            </h1>
                        </div>
                    </div>

                    <div id="nav-list">
                        <ul>
                            <li>
                                <a id="home-nav">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a id="products-nav">
                                    Products
                                </a>
                            </li>
                            <li>
                                <a id="contact-nav">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a id="cart-nav">
                                    Cart
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="main-home">
                    <div id="home-top">
                        <h1 id="greeting">
                            Boats for the common man
                        </h1>
                        <h2 id="greeting-2">
                            Buy new and used boats
                        </h2>
                    </div>
                </div>

                <div id="cart">
                    <div id="cart-top">
                        <h1 id="greeting">
                            Cart
                        </h1>
                    </div>
                </div>

                <div id="products">
                    <div id="product-title">
                        <h1 id="product-greeting">Products</h1>
                    </div>
                    <div id="product-table-div">
                        <table id="product-table">
                            <tr>
                                <?php

                                if (count($results) > 0) {
                                    foreach ($results as $product) {

                                        $productname = $product['name'];
                                        $productprice = $product['price'];
                                        $productimg = $product['pic-file'];

                                        echo "<td><img src=".'$productimg'."/> <h4 class='prods-list'>$productname</h4> <p class='prods-list'>$productprice</p></td>";
                                    }
                                }
                                ?>
                                <td>
                                    <img src="http://www.douglasbrooksboatbuilding.com/images/Peterborough1.jpg" id="prod-1" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="http://3219a2.medialib.glogster.com/diva2l/media/58/589fb09033aead1c4eb241314d386898639c073f/row-boat.jpg" id="prod-2" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="http://www.stewartriver.com/images/Rangeley10.jpg" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="rowboat123321.png" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="http://www.grapeviewpointboatworks.com/images/constr_acorn.jpg" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="roaboat123.png" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://www.sailingtexas.com/Pics5/picwhitehall14105a.jpg" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="http://www.newenglandfiberglassrepair.com/wp-content/uploads/2010/12/Pea-Pod-sho-boat-002-576x432.jpg" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                                <td>
                                    <img src="rowboat1.png" id="prod-3" class="prods">
                                    <h4 class="prods-list">Rowboat 1</h4>
                                    <p class="prods-list">Rowboat description</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </body>
    </html>