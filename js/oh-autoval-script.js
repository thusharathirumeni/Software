$(document).ready(function() {
  $error_count = 0;
  $(".av-mobile").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{10,10}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-phone").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{7,13}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-email").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-username").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[A-Za-z0-9_]{3,32}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-required").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[^&]{1,}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-url").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^(https?:\/\/www\.)[a-zA-Z0-9._]{1,}(\.[a-zA-z]{2,5})$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-integer").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[\-]?[0-9]{1,}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-number").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[\-]?[0-9]{1,}([\.][0-9]{1,})?$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-price").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[\-]?[0-9]{1,}([\.][0-9]{1,2})?$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-posnumber").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{1,}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-negnumber").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[\-][0-9]{1,}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-image").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(jpe?g|png|gif|bmp)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-video").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(mp4|avi|flv|wmv|mov|3gp|mkv)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-audio").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(mp3|wav|aac|m4a|ogg|amr)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-docgroup").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(docx?|odt|pdf|txt|html?|xlsx?|pptx?|ods)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-pdf").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(pdf)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-msdoc").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(docx?)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-msexcel").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(xlsx?)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-powerpoint").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(pptx?)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-webpage").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /\.(x?html?|php|js|css|asp)$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-atm").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{14,20}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-ifsc").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9A-Za-Z]{9,13}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-bankaccount").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{9,20}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-pancard").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-capletter").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[A-Z]{1,}$/;
      return $.fn.validate(this, autoval_validator, 1);
    });
  });
  $(".av-smallletter").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[a-z]{1,}$/;
      return $.fn.validate(this, autoval_validator, 1);
    });
  });
  $(".av-password").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;
      return $.fn.validate(this, autoval_validator, 1);
    });
  });
  $(".av-pincode").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{6,6}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-aadhaar").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[0-9]{12,12}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $(".av-name").each(function(index) {
    $(this).focusout(function() {
      var autoval_validator = /^[A-Za-z.\s]{3,50}$/;
      return $.fn.validate(this, autoval_validator, 0);
    });
  });
  $.fn.validate = function(object, validator, flag) {
    $autoval_value = flag == 1 ? $(object).val().trim() : $(object).val().toLowerCase().trim();
    $msg = object.getAttribute("av-message");
    $msg = $msg == null ? "Invalid Value" : $msg;
    if (!validator.test($autoval_value)) {
      $(object).css("border-width", "2px");
      $(object).css("border-style", "inset");
      $(object).css("border-color", "red");
      $(object).css("border-image", "initial");
      if (!$(object).next("#oh-autoval-error").length) {
        $("<span class='oh-autoval-error' id='oh-autoval-error'>" + $msg + "</span>").insertAfter(object);
      }
      $error_count++;
    } else {
      $(object).css("border-width", "2px");
      $(object).css("border-style", "inset");
      $(object).css("border-color", "initial");
      $(object).css("border-image", "initial");
      $(object).next("#oh-autoval-error").remove();
    }
  };
  $(".oh-autoval-form").each(function(index) {
    $(this).on("submit", function() {
      $error_count = 0;
      $(this).find("input, select, textarea").each(function() {
        $(this).focusout();
      });
      if ($error_count > 0) {
        return false;
      } else {
        return true;
      }
    });
  });
});
