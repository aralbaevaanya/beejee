<div class="container">
    <form action="../models/sort.php" method="post" class="form-inline lef">
        <div class="form-group mx-auto">
            <label for="sortType" class="col-form-label">Сортировать по</label>

            <select class="form-control mx-3 my-2" id="sortType" name="sortType">
                <option value="`user name`" <?php if ($_SESSION['sortType'] == '`user name`') {
                    echo 'selected';
                } ?>>Имени пользователя
                </option>
                <option value="`email`" <?php if ($_SESSION['sortType'] == '`email`') {
                    echo 'selected';
                } ?>>Email
                </option>
                <option value="`performed`" <?php if ($_SESSION['sortType'] == '`performed`') {
                    echo 'selected';
                } ?>>Статусу
                </option>
            </select>


            <select class="form-control mx-3 my-2" id="priority" name="priority">
                <option value="ASC" <?php if ($_SESSION['priority'] == 'ASC') {
                    echo 'selected';
                } ?>>Возрастанию
                </option>
                <option value="DESC" <?php if ($_SESSION['priority'] == 'DESC') {
                    echo 'selected';
                } ?>>Убыванию
                </option>
            </select>

            <button type="submit" class="col-form-label mx-3 my-2 btn btn-secondary btn-sm">Применить</button>
    </form>
</div>