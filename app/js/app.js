$(document).ready(function () {
  // Маска
  $("#phone").mask("+7 (999) 999-9999");

  // Открытие модального окна
  $(".cards__btn").click(function () {
    $(".modal__mask").addClass("active");
    const productCurrent = $(this).parent(".cards__item");
    const productName = productCurrent.find(".cards__name").text();
    $("#product").val(productName);
  });

  // Закрытие модального окна по кнопке
  $(".modal__close").click(function () {
    $(".modal__mask").removeClass("active");
  });

  // Закрытие по нажатию ESC
  $(document).on("keydown", function (e) {
    if (e.keyCode == 27) $(".modal__mask").removeClass("active");
  });

  // Закрыти епо клику вне окна
  $(".modal__mask").on("click", function (e) {
    if (e.target == this) $(".modal__mask").removeClass("active");
  });
});
