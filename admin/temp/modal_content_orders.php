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
      <form id="changeFormOrders" class="form-row form"  >
      <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                        <select id="selectChangeOrders" required="" autocomplete="off" class="form-select custom-select form-control"  name="selectChangeOrders">                                                                                                                                                
                                <option value="option1"></option>                              
                              </select>
                                <label for="selectChangeOrders">Статус</label>
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