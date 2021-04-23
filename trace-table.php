<div class="trace-adapt component">
    <form id="addPositions" method="POST">
        <fieldset>
            <legend>Добавить должность</legend>
            <div class="full-width">
                <label for="positionName">Наименование:</label>
                <input type="text" id="positionName" name="positionName" placeholder="Введите название должности" tabindex="1" required>
            </div>
            <div class="full-width">
                <div class="half-width">
                    <label for="levelCount">Число уровней в должности:</label>
                    <input type="number" id="levelCount" name="levelCount" tabindex="2" min="0" value="0" oninput="setInputFields(id)" required>
                </div>
            </div>
            <div class="position-levels full-width">
                <!-- Здесь формируются блоки уровней, где будут указываться необходимые компетенции -->
                <!-- Вид блоков следующий -->
                <div class="position-level full-width" id="">
                    <p>Уровень N</p>
                    <div class="half-width">
                        <label for="">Число компетенций в уровне:</label>
                        <input type="number" id="" name="" min="0" value="0" oninput="setInputFields(id)" required>
                        <!-- Далее формируется список компетенций -->
                        <div class="competence-list">
                            <div class="competence" id="">
                                <label for="">Наименование компетенции:</label>
                                <select id="" name="" tabindex="1" required>
                                    <option value="-1">Выберите компетенцию</option>
                                    <?php
                                        // Запрос к БД за компетенциями
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="buttons">
            <input type="submit" name="pageValue" value="Записать">
            <input type="reset" value="Очистить">
        </div>
    </form>
</div>
