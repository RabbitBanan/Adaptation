<style type="text/css">

.table-adapt {
  margin-top: 20px;
  width: auto;
}

.employees-list {
  margin: 0px 30px;
}


.component {
  padding-bottom: 12px;
}

details summary {
  display: block;  /* у summary по умолчанию свойство display в значении list-item, потому поддерживается свойство list-style */
  width: 10em;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;  /* блок раскрывается при щелчке по кнопке, а не по всей строке */
  margin: 5px 0;
  outline-style: none;  /* удалить обводку при фокусе */
  cursor: pointer;
}
details summary::-webkit-details-marker {  /* нестандартный псевдоэлемент Google Chrome */
  display: none;
}


.employee {
  padding-top: 10px;
}
.employee-event{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.employee-event p{
  margin-left: 50px;
}
.employee-event a{
    padding: 5px 0;
    padding-left: 10px;
    padding-right: 50px;
    cursor: pointer;
}

.confirmed-event p{
  padding: 5px 0;
  margin-left: 50px;
}

.passed-events, .confirmed-events {
  padding-left: 20px;
  padding-bottom: 7px;
  background-color: rgba(45, 45, 68, 0.2);;
  border-radius: 10px;

}

.confirmButton:hover {
  background-color: #2d2d44;
}
</style>

<div class="table-adapt component">
    <div class="employees-list">
          <details class="employee">
            <summary>Цимбалюк Богдан Ростиславович</summary>
            <p>Должность - Инженер-программист</p>
            <div class="passed-events">
                <details>
                  <summary>Пройденные мероприятия:</summary>
                  <!-- Мероприятия подгружаются из БД -->

                  <div class="employee-event">
                      <p>Ознакомиться с правилами пожарной безопасности</p>
                      <a class="confirmButton" id="confirmEvent">Подтвердить</a>
                  </div>
                  <div class="employee-event">
                      <p>Пройти обучение по оказанию первой помощи</p>
                      <a class="confirmButton" id="confirmEvent">Подтвердить</a>
                  </div>
                </details>

            </div>
            <div class="confirmed-events">
                <details>
                    <summary>Подтвержденные мероприятия:</summary>

                    <!-- Мероприятия подгружаются из БД -->
                    <div class="confirmed-event">
                        <p></p>
                    </div>
              </details>
            </div>
        </details>

    </div>
</div>
