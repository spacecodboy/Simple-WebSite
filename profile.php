<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сашенко А.А.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">
                        <h1>Сайт-визитка</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-8">
                <h2>Привет, я Сашенко Алексей</h2>
                <p>Люблю ИБ, учу ИБ, делаю ИБ.</p>
                <p>Поставил как-то пользователь антивирус, а он ему как раз.</p>
                <p>eyJhbG ciOiJS UzI1Ni IsImtpZCI6 ImE yMzhkZ DA0Y2JhYTU4MGI zMDRjODgxZT FjMDA4ZWMyOGZiY mFkZGMi LCJ0eXAiOiJK V1QifQ.eyJuY EPpI 30hRIiK7fAO M1rS2Ph2 9WlQ4XR2Ne5 jebHHCwsS3xZW_9 M8TtcXu0jw RRLIre4rZsJMI S i  cvm-zoPVBSs 3ExNwF Zcfn ApS-MoD- ZtA aG7bQCh ORAC8NwEL pOQO4pcLZ eyJhbG ciOiJS UzI1Ni IsImtpZCI6 ImE yMzhkZ DA0Y2JhYTU4MGI zMDRjODgxZT FjMDA4ZWMyOGZiY mFkZGMi LCJ0eXAiOiJK V1QifQ.eyJuY
                EPpI 30hRIiK7fAO M1rS2Ph2 9WlQ4XR2Ne5 jebHHCwsS3xZW_9 M8TtcXu0jw RRLIre4rZsJMI S i cvm-zoPVBSs 3ExNwF Zcfn ApS-MoD- ZtA
                aG7bQCh ORAC8NwEL pOQO4pcLZ eyJhbG ciOiJS UzI1Ni IsImtpZCI6 ImE yMzhkZ DA0Y2JhYTU4MGI zMDRjODgxZT FjMDA4ZWMyOGZiY mFkZGMi LCJ0eXAiOiJK V1QifQ.eyJuY
                EPpI 30hRIiK7fAO M1rS2Ph2 9WlQ4XR2Ne5 jebHHCwsS3xZW_9 M8TtcXu0jw RRLIre4rZsJMI S i cvm-zoPVBSs 3ExNwF Zcfn ApS-MoD- ZtA
                aG7bQCh ORAC8NwEL pOQO4pcLZ
                </p>
            </div>
            <div class="col-4">
                <h2>Фоточка</h2>
                <div class="row my_photo"></div>
                <div class="row">
                    <p class="title_photo">Сашенко А.А.</p>
                    <p class="title_photo">Это я с друзьями на PHD 12 :)</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h2>Любимая цитата</h2>
                <div class="row">"Если долго мучаться, что-нибудь получится".</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h2>Личные качества</h2>
                <div class="row">Ответственность, высокая обучаемость, стрессоустойчивость, желание развиваться, внимательность к
                деталям.</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h2>Контакты</h2>
                <div class="row">
                    <div class="col-3">
                        <p>Email:
                        <p>example@example.com</p>
                        </p>
                    </div>
                
                    <div class="col-3">
                        <p>Телефон:
                        <p>+7 (123) 456-7890</p>
                        </p>
                    </div>
                
                    <div class="col-3">
                        <p>Адрес:
                        <p>Новосибирск, Россия</p>
                        </p>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row button">
            <div class="button_js col-12">
                <button id="myButton">Click me!</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <p><form class="form_align" method="POST" action="/profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" name="title"  placeholder="Заголовок вашего поста"></p>
                <p><textarea name="text" cols="120" rows="10" placeholder="Введите то, что хотите написать..."></textarea></p>
                <br><p><input type="file" name="file"></p><br>
                <p><button type="submit" class="btn_red" name="submit">Сохранить пост!</button></p>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>
<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля!");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if(!mysqli_query($link, $sql)) die ("Не удалось добавить пост");

     if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg") ||
         (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg") ||
         (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
}
?>