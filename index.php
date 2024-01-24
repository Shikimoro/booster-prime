<?php require 'public/contact.php' ?>

<div id="main" class="main">
    <?php require 'public/slaider.php' ?>
    <!--MIDDLE BUTTON -->
    <div class="d-flex justify-content-center mb-3 mt-3 no-gutters">
        <a href="#order-section" class="btn go-to-order-form button_order_style">Перейти к заказу</a>
    </div>
    <!--MIDDLE BUTTON -->
    <!-- ORDERS -->
    <div class="row no-gutters">
        <?php require 'temp/modal_content.php' ?>
        <form id="open-modal" autocomplete="off">
            <div class="row no-gutters" id="order-section">
                <div class="col-md-12 col-lg-6 col-sm-12-col-xs-12" id="form-section">
                    <div class="form-row form">
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputUsername" type="text" autocomplete="off" required="" class="form-control"
                                name="inputUsername" placeholder="Как к Вам обращаться" style="background-image: url(./img/user_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 51.5px;
                                       background-position: 15px;">

                            <label for="inputUsername" class="bmd-label-floating">Как к вам обращаться</label>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputPhone" type="tel" required="" class="form-control" name="inputPhone"
                                placeholder="Номер телефона" autocomplete="off" style="background-image: url(./img/phone_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 50px;
                                       background-position: 15px;" inputmode="text" data-phone-pattern>
                            <label for="inputPhone">Номер телефона</label>
                        </div>
                    </div>

                    <div class="form-row form">
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputCarModel" type="text" class="form-control" name="inputCarModel"
                                autocomplete="off" placeholder="Модель машины" required="" style="background-image: url(./img/car_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 51.5px;
                                       background-position: 15px;">
                            <label for="inputCarModel">Модель машины</label>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="inputCarColor" required="" class="form-select custom-select form-control"
                                autocomplete="off" name="inputCarColor" style="padding-left: 50px;">
                                <option value="Белый">Белый</option>
                                <option value="Серебрянный">Серебрянный</option>
                                <option value="Серый">Серый</option>
                                <option value="Черный">Черный</option>
                                <option value="Коричневый">Коричневый</option>
                                <option value="Золотой">Золотой</option>
                                <option value="Бежевый">Бежевый</option>
                                <option value="Красный">Красный</option>
                                <option value="Оранжевый">Оранжевый</option>
                                <option value="Желтый">Желтый</option>
                                <option value="Зеленый">Зеленый</option>
                                <option value="Голубой">Голубой</option>
                                <option value="Синий">Синий</option>
                                <option value="Фиолетовый">Фиолетовый</option>
                                <option value="Пурпурный">Пурпурный</option>
                                <option value="Розовый">Розовый</option>
                            </select>
                            <label for="inputCarColor">Цвет машины</label>
                        </div>
                    </div>

                    <div class="form-row form">
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputCarNumber" type="text" required="" autocomplete="off" class="form-control"
                                name="inputCarNumber" placeholder="Номер машины" style="background-image: url(./img/car_number_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 51.5px;
                                       text-transform:uppercase;
                                       background-position: 15px;">
                            <label for="inputCarNumber">Номер машины</label>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="selectProduct" required="" autocomplete="off"
                                class="form-select custom-select form-control" name="selectProduct" style="background-image: url(./img/oil_icon.png);
                                    background-repeat: no-repeat;
                                    padding-left: 57px;
                                    background-position: 15px;">
                            </select>
                            <label for="selectProduct" style="padding-left: 70px;">Вид топлива</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3 mb-3"
                        style=" color: #fff; font-size: 16px; font-family: 'Roboto', sans-serif;">Цена за 1 л <span
                            class="fuel-price" id="oil-price">58.5 ₽</span></div>
                    <div class="form-row form">
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAmount" type="number" autocomplete="off" step="any" required=""
                                class="form-control" name="inputAmount"
                                placeholder="Объем (л.) <small>*мин. объем: 20</small>" style="background-image: url(./img/volume_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 50px;
                                       background-position: 15px;">
                            <label for="inputAmount" id="forInputAmount">Объем (л.) <small id="minAmount">*мин.
                                    объем:</small></label>
                        </div>
                        
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 mb-2 form-floating">

                            <input id="inputSum" type="number" required="" autocomplete="off" class="form-control"
                                name="inputSum" placeholder="Сумма (₽)" style="background-image: url(./img/cash_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 50px;
                                       background-position: 15px;">
                            <label for="inputSum">Сумма (₽)</label>
                        </div>
                    </div>

                    <div class="form-row form">
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="paymentType" autocomplete="off" required=""
                                class="form-select custom-select form-control" name="paymentType" style="background-image: url(./img/cash_icon.png);
                                    background-repeat: no-repeat;
                                    padding-left: 52px;
                                    background-position: 15px;">
                                <option value="1">Наличные</option>
                                <option value="2">Банковская карта</option>
                                <option value="3">Онлайн перевод</option>
                                <option value="4">Топливная карта</option>
                            </select>
                            <label for="paymentType">Способ оплаты</label>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="selectCity" autocomplete="off" required=""
                                class="form-select custom-select form-control" name="selectCity" style="background-image: url(./img/oil_icon.png);
                                    background-repeat: no-repeat;
                                    padding-left: 57px;
                                    background-position: 15px;">
                                <option value="1">Владикавказ</option>
                            </select>
                            <label for="selectCity" style="padding-left: 70px;">Город</label>
                        </div>
                    </div>

                    <div class="form-row form p-0" id="geocoder">
                        <div class="col-12 form-floating">
                            <ymaps
                                style="z-index: 40000; display: block; position: absolute; width: 633px; top: 58px; left: 5px;">
                            </ymaps>
                            <input id="inputAddress" type="text" required="" autocomplete="off" class="form-control"
                                name="inputAddress" placeholder="Введите адрес" style="background-image: url(./img/volume_icon.png);
                                       background-repeat: no-repeat;
                                       padding-left: 50px;
                                       background-position: 15px;">
                            <label for="inputAddress">Введите адрес</label>

                        </div>
                    </div>


                </div>
                <!-- MAPBOX -->

                <div class="col-lg-6 map-div" style="  padding-left: 20px;">
                    <div id="map" style="width: 100%;height: 100%;" class="mapboxgl-map">
                        <div class="mapboxgl-canary" style="visibility: hidden;"></div>
                        <div
                            class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate">
                            <canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="613"
                                height="485" style="width: 613px; height: 485px;"></canvas>
                        </div>
                        <div class="mapboxgl-control-container">
                            <div class="mapboxgl-ctrl-top-left"></div>
                            <div class="mapboxgl-ctrl-top-right">
                                <div></div>
                            </div>
                            <div class="mapboxgl-ctrl-bottom-left">
                                <div class="mapboxgl-ctrl" style="display: block;">
                                    <a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow"
                                        href="https://www.mapbox.com/" aria-label="Mapbox logo"></a>
                                </div>
                            </div>
                            <div class="mapboxgl-ctrl-bottom-right">
                                <div class="mapboxgl-ctrl mapboxgl-ctrl-attrib mapboxgl-compact"><button
                                        class="mapboxgl-ctrl-attrib-button" title="Toggle attribution"
                                        aria-label="Toggle attribution"></button>
                                    <div class="mapboxgl-ctrl-attrib-inner" role="list"><a
                                            href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox"
                                            aria-label="Mapbox">© Mapbox</a> <a
                                            href="https://www.openstreetmap.org/about/" target="_blank"
                                            title="OpenStreetMap" aria-label="OpenStreetMap">© OpenStreetMap</a> <a
                                            class="mapbox-improve-map" target="_blank" title="Map feedback"
                                            aria-label="Map feedback" rel="noopener nofollow">Improve this map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAPBOX --> 

                <div class="row no-gutters mt-3 " style="padding-left:0;">
                    <div class="form-row form p-0 m-0">
                        <div class="order-time-class form-floating mb-3 col-sm-12 col-md-6 col-lg-3"
                            style="padding-left: 0px;">
                            <input id="inputDeliveryTime" type="datetime-local" autocomplete="off"
                                name="inputDeliveryTime" class="form-control" style="background-image: url(./img/order_number_icon.png);
                                   background-repeat: no-repeat;
                                   padding-left: 50px;
                                   background-position: 15px;" min="">
                            <label for="inputDeliveryTime">Время доставки</label>
                        </div>
                        <div class="create-order-button  mb-3 col-sm-12 col-md-6 col-lg-3 pr-0 pl-1">
                            <button id="checkOrderStatus" type="submit" class="btn btn-primary" style="color: #000000;
                                width: 100%;
                                       font-size: 20px;
                                       font-weight: 500;
                                       padding: 12px 56px;
                                       font-family: 'Roboto', sans-serif;
                                       background-color: #FFD500;border-radius: 4px;">Заказать
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- ORDERS -->

    <div class="form-row row no-gutters form mt-5 p-2 col-12" style="padding-left: 12px !important;">
        <div id="open-modal" class="col-md-6 col-lg-3 col-sm-12 col-xs-12 mb-3 form-floating">
            <input id="inputOrderId" type="text" class="form-control" name="inputOrderId" placeholder="Номер заказа"
                autocomplete="off" style="background-image: url(./img/order_number_icon.png);
                       background-repeat: no-repeat;
                       padding-left: 50px;
                       background-position: 15px;">
            <label for="inputOrderId">Номер заказа</label>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 col-xs-12 mb-3" style="padding-right: 0px !important;">
            <button id="checkOrderStatus" onclick="checkOrderStatus()" class="btn"
                style="line-height: 43px; font-family: Roboto, sans-serif;font-style: normal;font-weight: 500;font-size: 20px; background-color: #FFD500;width: 100%;">
                Проверить заказ
            </button>
        </div>
    </div>
    <!-- RESULT ORDER -->
    <div class="row no-gutters">
        <div class="col-12">
            <h3 class="text-center mt-8 mb-8" style="color: white;margin-top: 2rem;"> Товар возврату не подлежит!</h3>
        </div>
    </div>
</div>
<?php require 'public/footer.php' ?>
