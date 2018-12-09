<?php 
if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */   
$to = "vetal.roshen@mail.ru"; // Здесь нужно написать e-mail, куда будут приходить письма   
$from = "portfolio_ztgl@prt.net"; // Здесь нужно написать e-mail, от кого будут приходить письма.
/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['user-comment'];
$subject = "Форма отправки сообщений с сайта Portfolio";
     
/* Проверка правильного написания e-mail адреса */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
     
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Вам было отправлено сообщение с сайта! 
Имя отправителя: $first_name
E-mail: $email
Заголовок: $title
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";  
     
$headers = "From: $from \r\n";
     
/* Отправка сообщения, с помощью функции mail() */
mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
echo "Сообщение отправлено. " . $first_name . ", мы обязательно прочтем Ваше сообщение и по необходимости свяжемся с Вами.";
echo "<br /><br /><a href='https://epicblog.net'>Вернуться на сайт.</a>";
}
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://epicblog.net");}
window.setTimeout("changeurl();",3000);
</script>