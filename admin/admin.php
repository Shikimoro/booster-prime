<?php session_start(); ?>
<?php require 'temp/head_connect.php'?>
<body>
<?php if(!empty($_SESSION["login"])) :?>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->    

<?php require 'temp/navbar.php'?>
            <div class="details" style="display: grid;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Новые заказы</h2>
                        <a href="orders.php" class="btn"style="background: var(--blue);">Показать все</a>
                    </div>
                    <table>
                    <thead>
                            <tr>
                                <td>Имя</td>
                                <td>Стоимость</td>
                                <td>Способ оплаты</td>
                                <td>Статус</td>
                            </tr>
                        </thead>
                        <tbody id="tableBodyHome">              
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Новые клиенты</h2>
                    </div>
                    <table>     
                        <tbody id="tableBodyNewClients">    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->
<?php else:
    echo '<h2>NO AUTORIZATION</h2>'
?>
<?php endif ?>

<!-- =========== Scripts =========  -->
<script src="js/tableBodyHome.js"></script>

<?php require 'temp/admin_footer.php'?>