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
      <form id="changeFormUsers" class="form-row form"  >
                         <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangeUsername" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangeUsername"  placeholder=""  >
                           <label for="inputChangeUsername" >Логин</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputChangePassword" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputChangePassword"  placeholder=""  >
                           <label for="inputChangePassword" >Пароль</label>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                        <select id="selectChangeStatus" required="" autocomplete="off" class="form-select custom-select form-control"  name="selectChangeStatus">                                                                                                                                                
                                <option value="option1">Администратор</option>
                                <option value="option2">Модератор</option>
                              </select>
                              <label for="selectChangeStatus">Статус</label>
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
        <form id="formAddUsers" class="form-row form">
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddUsername" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputAddUsername"  placeholder=""  >
                            <label for="inputAddUsername" >Логин</label>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12-col-xs-12 form-floating mb-3">
                            <input id="inputAddPassword" type="text" autocomplete="off" step="any" required="" class="form-control" name="inputAddPassword"  placeholder=""  >
                           <label for="inputAddPassword" >Пароль</label>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12-col-xs-12 form-floating mb-3">
                            <select id="selectAddStatus" required="" autocomplete="off" class="form-select custom-select form-control"  name="selectAddStatus">                                                                                                                                                
                                <option value="option1">Администратор</option>
                                <option value="option2">Модератор</option>
                              </select>
                                <label for="selectAddStatus">Статус</label>
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