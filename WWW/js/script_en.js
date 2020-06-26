$(document).ready(function()
{
        $("#submit").click(function()
        {
                $("#erconts").fadeIn(500);
                $.ajax(
                {
                        type: "POST",
                        url: "send_en.php", // Адрес обработчика
                        data: $("#callbacks").serialize(),
                        error:function()
                        {
                                $("#erconts").html("Oh, something went wrong!");
                        },
                        beforeSend: function()
                        {
                                $("#erconts").html("Sending data...");
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