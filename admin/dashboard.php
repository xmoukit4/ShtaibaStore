<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <aside>
            <div class="top">
            <div class="logo">
                <img src="../Assets/Logo.png" alt="Logo">
            </div>
            <div class="close" id="closeBtn">
                <span class="material-icons-sharp">
                    close
                    </span>
                    
            </div>
        </div>
            <div class="side-bar">
                <button class="active">
                    <span class="material-icons-sharp">
                        dashboard
                        </span>
                        <h3>Dashboard</h3>
                </button>
                <button onclick="loadProductsPage()">
                    <span class="material-icons-sharp">
                        inventory_2
                        </span>
                        <h3>Produits</h3>
                </button>
                <button onclick="loadGestionnairesPage()">
                    <span class="material-icons-sharp">
                        groups
                        </span>
                        <h3>Les Gestionnaires </h3>
                </button>
                <button onclick="loadCommandesPage()">
                    <span class="material-icons-sharp">
                        shopping_basket
                        </span>
                        <h3>Les Commandes</h3>
                </button>
                <button>
                    <span class="material-icons-sharp">
                        logout
                        </span>
                        <h3>Deconnection</h3>
                </button>
        </aside>
        <main>
            <h1>Dashboard</h1>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">
                        monetization_on
                        </span>
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Totale Vendu</h3>
                                <h1>$251,024</h1>
                            </div>
                        </div>
                </div>
                <div class="orders">
                    <span class="material-icons-sharp">
                        shopping_cart
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Totale Commandes</h3>
                                <h1>5362</h1>
                            </div>
                        </div>
                </div>
                <div class="products">
                    <span class="material-icons-sharp">
                        shopping_bag
                        </span>
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Totale Produits</h3>
                                <h1>25</h1>
                            </div>
                        </div>
                </div>
            </div>
        
        <div class="recent-orders">
            <h2>Commandes Recent</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom Produit</th>
                        <th>Numero Produit</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <a href="./commandes.php">Show All</a>


        </div>
    </main>
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                    </span>
            </button>
        </div>
        <div class="recent-updates">
            <h2>Test</h2>
            <div class="updates">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quam recusandae neque porro aliquid dignissimos consequuntur ea impedit delectus minima rem sequi quas reprehenderit!</p>
            </div>
        </div>
        <div class="sales-analytics">
            <h2>Statistiques</h2>
            <div class="item online">
                <span class="material-icons-sharp">
                    shopping_cart
                    </span>
            
            <div class="right">
                <div class="info">
                    <h3>Online Orders</h3>
                    <small class="text-muted">
                        Dernier 24 Heure
                    </small>
                </div>
                <h5 class="success">+39%</h5>
                <h3>3848</h3>
            </div>
        </div>
        <div class="item online">
            <span class="material-icons-sharp">
                person_outline
                </span>
        
        <div class="right">
            <div class="info">
                <h3>Nouveau Clients</h3>
                <small class="text-muted">
                    Dernier 24 Heure
                </small>
            </div>
            <h5 class="danger">-8%</h5>
            <h3>12</h3>
        </div>
        
        </div>
        </div>
</div>
<script src="./redirections.js"></script>

<script src="./order.js"></script>

<script src="./admin.js"></script>
</body>
</html>