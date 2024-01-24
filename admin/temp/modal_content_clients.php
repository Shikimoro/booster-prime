<!-- Модальное окно УДАЛЕНИЕ-->
<div class="modal fade" id="exampleModalRemove" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">УДАЛЕНИЕ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        Вы действительно хотите это удалить ?
      </div>
      <div id="removeModalForm" class="modal-footer">
        <button id="closeButtonRemove" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
        <button type="button" class="btn btn-primary" onclick="removeForm()">Да</button>
      </div>
    </div>
  </div>
</div>
<!-- Модальное окно ИЗМЕНЕНИЕ-->
<div class="modal fade" id="exampleModalСhange" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ИЗМЕНЕНИЕ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div id="changeModalForm" class="modal-body">
      <form id="changeFormClients" class="form-row form"  >
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeClientsPhone" type="tel" required="" class="form-control"  name="inputChangeClientsPhone" placeholder="Номер телефона" autocomplete="off" data-phone-pattern="">
                            <label for="inputChangeClientsPhone">Номер телефона</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeClientsName" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangeClientsName"  placeholder=""  >
                           <label for="inputChangeClientsName" >Имя</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeCarNumber" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangeCarNumber"  placeholder=""  style="text-transform: uppercase;">
                           <label for="inputChangeCarNumber" >Номер машины</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeCarModel" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangeCarModel"  placeholder="">
                           <label for="inputChangeCarModel">Модель машины</label>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                          <select id="selectChangeCarColor" required="" autocomplete="off" class="form-select custom-select form-control"  name="selectChangeCarColor">                                                                                                                                                
                                <option value="option1">Серебрянный</option>
                                <option value="option2">Серый</option>
                              </select>
                            <label for="selectChangeCarColor">Цвет машины</label>
                        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="closeButtonChange" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
        <button type="button" class="btn btn-primary" onclick="changeForm()">Да</button>
      </div>
    </div>
  </div>
</div>
<!-- Модальное окно ДОБАВЛЕНИЕ-->
<div class="modal fade" id="exampleModalAddendum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ДОБАВЛЕНИЕ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form id="formAddClients" class="form-row form">
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddClientsPhone" type="tel" required="" class="form-control"  name="inputAddClientsPhone" placeholder="Номер телефона" autocomplete="off" data-phone-pattern="">
                            <label for="inputAddClientsPhone">Номер телефона</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddClientsName" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputAddClientsName"  placeholder=""  >
                           <label for="inputAddClientsName" >Имя</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddCarNumber" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputAddCarNumber"  placeholder=""  style="text-transform: uppercase;">
                           <label for="inputAddCarNumber" >Номер машины</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddCarModel" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputAddCarModel"  placeholder="">
                           <label for="inputAddCarModel">Модель машины</label>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="selectAddCarColor" required="" autocomplete="off" class="form-select custom-select form-control"  name="selectAddCarColor">                                                                                                                                                                            <option value="Белый">Белый</option>
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
                            <label for="selectAddCarColor">Цвет машины</label>
                        </div>
        </form>
    </div>
      <div class="modal-footer">
        <button id="closeButtonAddendum" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
        <button type="button"  class="btn btn-primary" onclick="submitForm()">Да</button>
      </div>
    </div>
  </div>
</div>
<!-- Модальное окно УДАЛЕНИЕ-->
<div class="modal fade" id="exampleModalSearch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Поиск пользователя</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
      <form class="search_clients_form" id="searchClients" class="form-row form">
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating" style="margin-right: 1em;">
                            <input id="searchClientsPhone" type="tel" required="" class="form-control"  name="searchClientsPhone" placeholder="Номер телефона" autocomplete="off" data-phone-pattern="">
                            <label for="searchClientsPhone">Введите номер телефона</label>
                        </div>
                    </form>
      </div>
      <div  class="modal-footer">
        <button id="closeButtonSearch" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
        <button type="button" class="btn btn-primary" onclick="searchClients()">Да</button>
      </div>
    </div>
  </div>
</div>