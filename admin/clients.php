<?php session_start(); ?>
<?php require 'temp/head_connect.php'?>
<body>
<?php if(!empty($_SESSION["login"])) :?>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->    

<?php require 'temp/navbar.php'?>
            <div class="details">
            <?php require 'temp/modal_content_clients.php'?>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Пользователи</h2>
                        <div class="cardButton">      
                            <button class="dropdown-item btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSearch">Найти клиента</button>
                            <button class="dropdown-item btn btn-primary button_addendum" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalAddendum">Добавить</button>   
                        </div>                   
                    </div>
                    <table id="dataTable">
                    <thead>
                            <tr>
                                <td>Тел. Номер</td>
                                <td>Имя</td>
                                <td>Номер машины</td>
                                <td>Модель машины</td>
                                <td>Цвет мащины</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="tableBodyClients">              
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
<script src="js/tableBodyClients.js"></script>
<script src="js/tableSearchClients.js"></script>
<script src="js/postAddClients.js"></script>
<script src="js/removeClients.js"></script>
<script src="js/changeClients.js"></script>

<?php require 'temp/admin_footer.php'?>