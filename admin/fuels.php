<?php session_start(); ?>
<?php require 'temp/head_connect.php'?>
<body>
<?php if(!empty($_SESSION["login"])) :?>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->    

<?php require 'temp/navbar.php'?>
            <div class="details">
<?php require 'temp/modal_content_fuel.php'?>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Топливо</h2>
                        <button class="dropdown-item btn btn-primary button_addendum" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalAddendum">Добавить</button>
                    </div>
                    <table id="dataTable">
                    <thead>
                            <tr>                               
                                <td>Тип топлива</td>
                                <td>Цена за литр</td>
                                <td>Минимальное количество для заказа</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="tableBodyFuels">              
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
<script src="js/tableBodyFuels.js"></script>
<script src="js/postAddFuel.js"></script>
<script src="js/removeFuel.js"></script>
<script src="js/changeFuel.js"></script>

<?php require 'temp/admin_footer.php'?>