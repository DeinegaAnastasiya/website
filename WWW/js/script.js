$(document).ready(function()
{
        $("#submit").click(function()
        {
                $("#erconts").fadeIn(500);
                $.ajax(
                {
                        type: "POST",
                        url: "send.php", // Адрес обработчика
                        data: $("#callbacks").serialize(),
                        error:function()
                        {
                                $("#erconts").html("Ой, что-то пошло не так!");
                        },
                        beforeSend: function()
                        {
                                $("#erconts").html("Отправляем данные...");
                        },
                        success: function(result)
                        {
                                $("#erconts").html(result);
                                checkThis();
                        }
                });
        return false;
        });
});