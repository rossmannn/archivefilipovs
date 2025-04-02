console.log("Ready!");

jQuery(document).ready(function ($) {
  $("#submit_form").on("click", function () {
    // Отримуємо дані з форми і кладемо у змінні
    var firstName = $("#firstName").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var comment = $("#comment").val();

    $.ajax({
      url: ajaxurl,
      type: "POST",
      data: {
        action: "your_custom_action",
        firstName: firstName,
        phone: phone,
        email: email,
        comment: comment,
      },
      success: function (response) {
        if (response == "1") {
          alert("Лист успішно надіслано!");
        } else if (response == "0") {
          alert("Лист не вдалося надіслати!");
        }
      },
    });
  });
});
