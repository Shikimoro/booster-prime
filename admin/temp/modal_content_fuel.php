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
      <form id="changeFormFuel" class="form-row form"  >
                         <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeFuelName" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangeFuelName"  placeholder=""  >
                           <label for="inputChangeFuelName" >Тип топлива</label>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeCost" type="number" autocomplete="off" step="any" required="" class="form-control" name="inputChangeCost"  placeholder="" >
                           <label for="inputChangeCost">Цена за литр</label>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 mb-2 form-floating">
                            <input id="inputChangeMinAmount" type="number" required="" autocomplete="off" class="form-control" name="inputChangeMinAmount"  placeholder="" >
                            <label for="inputChangeMinAmount" >Мин. количество для заказа</label>
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
<!-- Модальное окно ДОБАВЛЕНИЕ ТОПЛИВО-->
<div class="modal fade" id="exampleModalAddendum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ДОБАВЛЕНИЕ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form id="formAddFuel" class="form-row form">
        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddFuelName" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputFuelName"  placeholder=""  >
                           <label for="inputFuelName" >Тип топлива</label>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddCost" type="number" autocomplete="off" step="any" required="" class="form-control" name="inputCost"  placeholder="" >
                           <label for="inputCost">Цена за литр</label>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 mb-2 form-floating">
                            <input id="inputAddMinAmount" type="number" required="" autocomplete="off" class="form-control" name="inputMinAmount"  placeholder="" >
                            <label for="inputMinAmount" >Мин. количество для заказа</label>
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
