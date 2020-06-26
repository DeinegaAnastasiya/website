<?
 
if(isset($_POST["name"]))
{
        if(isset($_POST["name"]))
        {
                $name = $_POST["name"];
        }
        if(isset($_POST["phone"]))
        {
                $phone= $_POST["phone"];
        }
        if(isset($_POST["email"]))
        {
                $email = $_POST["email"];
        }
 
        if($name=="" or $phone=="" or $email=="")
        { // Проверяем на заполненность всех полей.
                echo "Please fill in all fields";
        }
        else
        {
                $ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
                $brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
                $to = " $to = "hunningollaola@gmail.com";"; // Ваш email адрес
                $subject = "Заявка c сайта Asquare"; // тема письма
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n
                ";
                $headers .= "Отправитель: Посетитель сайта"; // Отправитель письма
                $message = "
                Имя: $name<br>
                Телефоны: $phone<br>
                E-mail: $email<br><br>
 
                IP отправителя: $ip<br>
                Браузер отправителя: $brose<br>
                ";
 
                $send = mail($to, $subject, $message, $headers);
                if ($send == "true")
                {
                        echo "The request has been sent. We will call you back soon!";
                }
                else
                {
                        echo "Failed to send, try again!";
                }
        }
}
 
?>