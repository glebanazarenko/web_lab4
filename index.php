<?php
  include('header.html');
?>

<body>
    <header>
    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
      <h1 class = "text_up head_title" style= "position: fixed; left: 25%;top:1%; width: 45%;height: 5%;">Заполните форму ниже</h1>
    </header>
    <main>
        <form style="position: absolute; left: 40%; top: 20%;" action="result.php" method="POST">
            <label for = "last_name">Фамилия <br><br><em></em></label>
            <input id = "last_name" name = "last_name" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>"><br>      
            <label for = "first_name">Имя <br><br><em></em></label>
            <input id = "first_name" name ="first_name" value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>"><br>
            <label for = "second_name">Отчество <br><br><em></em></label>
            <input id = "second_name" name ="second_name" value="<?=isset($_POST['second_name'])?$_POST['second_name']:''?>"><br>
            <label for = "email" >Email <br><br><em></em></label>
            <input id = "email" name ="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>"><br>
            <label for = "sex">Вид<br><br></label>
            <select id = "sex">
              <option value = "appeal">Жалоба</option>
              <option value = "handling">Обращение</option>
              <option value = "help">Помощь</option>
              <option value = "other">Другое</option>
            </select><br>
            <label for = "comments">Текст<br><br></label>
            <textarea id = "comments" name = "comments"></textarea><br>
            <label for = "about">Откуда узнали о нас<br></label>
            <label><br>
              <input type="radio" name="radio-test" value="1"<?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '1') { 
                echo 'checked';
              }
              ?> >

              Друзья
            </label>
            <label><br>
              <input type="radio" name="radio-test" value="2" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '2') { 
                echo 'checked';
              }
              ?> > 
              Соцсети
            </label>
            <div>
              <input type = "file" name = "file1" ></p>
            </div>
              <input type="checkbox" name="option5" value="a5">Даю согласие на обработку </br> персональных данных</p>
              <p><input type = "submit" class = "button_main" value="          Отправить         "></p>
        </form>
    </main>

    <footer>
    <div class = "top_line" style = "position: absolute; left: 0%;top:110%; width: 100%; height: 50%;"> </div>
        <div class = "text" style = "position: absolute; left: 35%;top:115%; width: 40%; height: 10%;"><?php ; ?></div>
      <div class = "text" style = "position: absolute; left: 35%;top:115%; width: 40%; height: 10%;"><?php ?> </div>
    </footer>
</body>