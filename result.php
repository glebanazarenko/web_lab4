<?php
  include('header.html');
?>

<body>
    <header>
        <div class="top_line head_title" style="position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
        <h1 class="text_up head_title" style="position: fixed; left: 25%;top:1%; width: 45%;height: 5%;">Заполните форму
            ниже</h1>
    </header>
    <main>
        <form action="index.php" method="POST" class="text" style="position: absolute; left: 40%;top:25%; width: 45%;">
            <label for="last_name">Фамилия <br><br><em></em></label>
            <input id="last_name" name="last_name" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>"><br>
            <label for="first_name">Имя <br><br><em></em></label>
            <input id="first_name" name="first_name"
                value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>"><br>
            <label for="second_name">Отчество <br><br><em></em></label>
            <input id="second_name" name="second_name"
                value="<?=isset($_POST['second_name'])?$_POST['second_name']:''?>"><br>
            <?php if (isset($_POST['file']) && $_POST['file'] != '') echo '<p><span style="margin-left: 30%">' . $_POST['file'] . '</span></p>';?>
            <label><br>
                <input type="radio" name="radio-test" value="1" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '1') { 
                echo 'checked';
              }
              ?>>
                Друзья
            </label>
            <label><br>
                <input type="radio" name="radio-test" value="2" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '2') { 
                echo 'checked';
              }
              ?>>
                Соцсети
            </label>
            <div class="text" style="position: absolute; width: 40%; height: 10%;"></div><br><br><br>
            <p><input type="submit" class="button_main" value="   Заполнить повторно   "></p>
        </form>

        <div class="text" style="position: absolute;color: black; left: 35%;top:70%; width: 40%; height: 10%;">
            <?php if (isset($_POST['file1']) & $_POST['file1'] != '') echo 'Вы приложили следующий файл: '.$_POST['file1']; ?>
        </div>
        <footer>
            <div class="top_line" style="position: absolute; left: 0%;top:110%; width: 110%; height: 30%;"> </div>
            <div class="text" style="position: absolute; left: 35%;top:115%; width: 40%; height: 10%;"><?php ; ?></div>
            <div class="text" style="position: absolute; left: 35%;top:115%; width: 40%; height: 10%;"><?php ?> </div>
        </footer>
</body>

</html>

</main>
</body>