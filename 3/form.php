<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>3</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-12 main-label text-center text-light bg-dark">
                Задание 3
            </div>
            <div class="col-sm-8 col-md-4 mx-auto">
                <form id="thatForm" action="index.php" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                    <div class="form-row text-light">
                        <div class="col pt-1">
                            <div>
                                Имя:
                            </div>
                            <label>
                                <input class="form-control form-control-md info" type="text" name="userName" placeholder="Ваше имя" autocomplete="off">
                            </label><br/>
                        </div>
                        <div class="col pt-1">
                            <div>
                                Email:
                            </div>
                            <label>
                                <input class="form-control form-control-md info" type="text" name="userEmail" placeholder="E-mail" autocomplete="off">
                            </label><br/>
                        </div>
                        <div class="col pt-1">
                            <div>
                                Дата рождения:
                            </div>
                            <label>
                                <input class="form-control form-control-md info" type="date" name="userBirthdate" autocomplete="off">
                            </label><br/>
                        </div>
                        <div class="col pt-1">
                            <div>
                                Пол:
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-custom-bg" type="radio" value="1" name="userGender" id="userMale" checked="checked">
                                <label class="form-check-label" for="userMale">
                                    Мужской
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-custom-bg" type="radio" value="2" name="userGender" id="userFemale">
                                <label class="form-check-label" for="userFemale">
                                    Женский
                                </label>
                            </div>
                        </div>
                        <div class="col pt-1">
                            <div>
                                Кол-во конечностей:
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-custom-bg" type="radio" value="1" name="userLimbs" id="userHealthy" checked="checked">
                                <label class="form-check-label" for="userHealthy">
                                    2 ноги и 2 руки
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-custom-bg" type="radio" value="2" name="userLimbs" id="userDisabled">
                                <label class="form-check-label" for="userDisabled">
                                    Недостаточно
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-custom-bg" type="radio" value="3" name="userLimbs" id="userGodrik">
                                <label class="form-check-label" for="userMany">
                                    Есть запасные
                                </label>
                            </div>
                        </div>
                        <div class="col pt-1">
                            <div>
                                 О себе:
                            </div>
                            <label>
                                <textarea class="form-control form-control-md" name="userBio" placeholder="О себе" autocomplete="off"></textarea>
                            </label><br/>
                        </div>
                        <div class="col pt-1">
                            <div>
                                Сверхспособности:
                            </div>
                            <label>
                                <select class="form-select form-select-md" multiple aria-label="multiple select" name="ab[]">
                                    <option value="0">Бессмертие</option>
                                    <option value="1">Чтение мыслей</option>
                                    <option value="2">Левитация</option>
                                </select>
                            </label>
                        </div>
                        <div class="col pt-1">
                            <label class="text-light">
                                <input type="checkbox" id="check">
                                Согласен
                            </label><br/>
                        </div>
                        <div class="col mt-3 pb-3">
                            <input class="btn btn-danger btn-lg" type="submit" id="submitButton" value="Свяжитесь с нами!" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery_v3.6.0.js"></script>
    <script src="bootstrap.js"></script>
    <script src="java.js"></script>
</body>
</html>
