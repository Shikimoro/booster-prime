<?php session_start(); ?>
<?php require 'temp/head_connect.php'?>
<body>
<?php if(!empty($_SESSION["login"])) :?>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->    

<?php require 'temp/navbar.php'?>
            <div class="details">
            <?php require 'temp/modal_content_orders.php'?>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Заказы</h2>
                    </div>
                    <table id="dataTable">
                    <thead>
                            <tr>
                                <td>Тел. Номер</td>
                                <td>Тип топлива</td>
                                <td>Стоимость</td>
                                <td>Способ оплаты</td>
                                <td>Дата</td>
                                <td>Адрес</td>
                                <td>Статус</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="tableBodyOrders">              
                        </tbody>
                    </table>
                    <div id="paginationButtons"></div>
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
<script src="js/tableBodyOrders.js"></script>
<script src="js/removeOrders.js"></script>
<script src="js/changeOrders.js"></script>

<?php require 'temp/admin_footer.php'?>