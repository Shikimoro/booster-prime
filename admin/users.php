<?php session_start(); ?>
<?php require 'temp/head_connect.php'?>
<body>
<?php if(!empty($_SESSION["login"])) :?>
<!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT --><!-- PROJECT -->    

<?php require 'temp/navbar.php'?>
            <div class="details">
<?php require 'temp/modal_content_users.php'?>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Пользователи</h2>
                        <button class="dropdown-item btn btn-primary button_addendum" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalAddendum">Добавить</button>
                    </div>
                    <table id="dataTable">
                    <thead>
                            <tr>
                                <td>Логин</td>
                                <td>Пароль</td>
                                <td>Статус</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="tableBodyUsers">              
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
<script src="js/tableBodyUsers.js"></script>
<script src="js/postAddUsers.js"></script>
<script src="js/removeUsers.js"></script>
<script src="js/changeUsers.js"></script>

<?php require 'temp/admin_footer.php'?>