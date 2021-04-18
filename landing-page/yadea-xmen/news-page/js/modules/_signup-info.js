export default class SignupInfo {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.$openModalBtn = $(".open-signup-info-modal");
    this.$closeModalBtn = $(".close-signup-info-modal");
    this.$signupInfoModal = $(".signup-info-modal");

    this.$openModalBtn.on("click", () => {
      this.$signupInfoModal.addClass("active");
    });

    this.$closeModalBtn.on("click", () => {
      this.$signupInfoModal.removeClass("active");
    });

    this.$signupBuyBikeForm = $(".signup-information-form");
    this.FormSetup(this.$signupBuyBikeForm);
  }

  /* ===================================
   *  METHODS
   * =================================== */
  FormSetup(formElement) {
    let $submitFeedback = formElement.find(".submit-feedback");
    let action = formElement.attr("action");
    let $loadingIcon = formElement.find(".loading-context");
    let $buttonContext = formElement.find(".btn-context");
    let $submitBtn = formElement.find("[type=submit]");
    let $callbackLink = formElement.data("callback-link") ? formElement.data("callback-link") : "";
    formElement.on("submit", (e) => {
      e.preventDefault();

      var today = new Date();
      var date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

      formElement.find("input[name=registered_day]").val(date + " " + time);
      let data = formElement.serialize();
      console.log(data);
      $loadingIcon.show();
      $buttonContext.hide();

      $.ajax({
        type: "GET",
        url: action,
        dataType: "json",
        crossDomain: true,
        data: data,
        success: (data) => {
          $loadingIcon.hide();
          if (data == "false") {
            $buttonContext.show();
            $loadingIcon.hide();
            $submitFeedback
              .removeClass("success")
              .addClass("error")
              .html("Đăng ký mua xe không thành công, quý khách vui lòng thử lại");
          } else {
            if ($callbackLink === "") {
              $submitBtn.hide();
              $submitFeedback
                .removeClass("error")
                .addClass("success")
                .html("Đăng ký mua xe thành công, Yadea sẽ liên hệ lại với bạn");
            } else {
              $submitBtn.hide();
              window.location.replace($callbackLink);
            }
          }
        },
      });
    });
  }
}
