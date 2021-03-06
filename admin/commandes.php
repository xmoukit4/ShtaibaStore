<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link rel="stylesheet" href="styles/admin.css">
    <link rel="stylesheet" href="styles/products.css">

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
                <button onclick="loadDashBoardPage()">
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
                <button class="active">
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
        
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                        </span>
                </button>
            </div>
            
            <div id="page">
            <div class="recent-orders">
            <h2>Commandes</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Num Commande</th>
                        <th>Num Client</th>
                        <th>Articles</th>
                        <th>Prix Totale</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a  class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
            </div>
    </div>
    </div>

    </div>
    
<script src="js/redirections.js"></script>
<script src="js/order.js"></script>
<script src="js/products.js"></script>

</body>
</html>