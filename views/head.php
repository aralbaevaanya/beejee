<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="lib/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="/feedback/css/main.css">-->

    <script src="lib/jquery-3.1.1.min.js"></script>
    <script src="lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>
<div class="container mx-auto py-2">
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTaskModal">
                Создать задачу
            </button>
            <?php if (isset($_SESSION['user_login'])): ?>
                <button onclick="location.href='http://anyaaralbaeva.zzz.com.ua/models/logout.php'" type="button"
                        class="btn btn-info">
                    Выход
                </button>
            <?php else: ?>
                <button onclick="location.href='http://anyaaralbaeva.zzz.com.ua/views/loginPage.php'" type="button"
                        class="btn btn-info">
                    Вход от имени администратора
                </button>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="modal" id="createTaskModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Создать задачу</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form id="createTaskForm" method="post">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name" class="control-label">Имя</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Имя"
                                       minlength="2" maxlength="30" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label">Email-адрес</label>
                                <input id="email" type="email" name="email" required="required" class="form-control"
                                       placeholder="Email-адрес">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="control-label">Текст</label>
                        <input type="text" id="text" name="text" class="form-control" required="required"/>

                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="btn">Создать</button>
                </form>

                <!-- Сообщение об успешной отправки формы -->
                <div class="alert alert-success form-success mb-0 d-none" id="successForm">Форма успешно отправлена.
                    Нажмите на <a class="form-success-link" href="#">ссылку</a>, чтобы создать еше одну задачу.
                </div>
            </div>
        </div>
    </div>
</div>