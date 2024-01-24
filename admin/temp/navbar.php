<div class="container_menu">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="/img/favicon.png">
                        </span>
                        <span class="title">Booster Prime</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Главная</span>
                    </a>
                </li>

                <li>
                    <a href="clients.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Клиенты</span>
                    </a>
                </li>

                <li>
                    <a href="orders.php">
                        <span class="icon">
                        <ion-icon name="wallet-outline"></ion-icon>
                        </span>
                        <span class="title">Заказы </span>
                    </a>
                </li>

                <li>
                    <a href="fuels.php">
                        <span class="icon">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        </span>
                        <span class="title">Топливо</span>
                    </a>
                </li>

                <li>
                    <a href="users.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Пользователи</span>
                    </a>
                </li>

                <li>
                    <a href="../logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Выход</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="username_topbar"> 
                    <span style="padding-right: 10px;">             
                    <?php echo "С возвращением, ".$_SESSION['login']; ?>
                    </span>  
                <div class="user">
                    <img src="img/lot.jpg" alt="">
                </div>
                </div>
            </div>