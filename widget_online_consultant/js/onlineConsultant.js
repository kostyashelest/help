$(function() {
  KMA.init();
  $(window).resize(function() {
    KMA.modalRefresh();
  });
  KMA.modalRefresh();
  $(document).on("click", "a[modal]", function() {
    var modalWindow = $("div#" + $(this).attr("modal"));
    if (modalWindow.length) {
      KMA.modalShow(modalWindow);
      return false;
    }
  }).on("click", ".icon-close, .modal, .button-close", function(event) {
    if (event.target != this) {
      return false;
    } else {
      KMA.modalHide($(this).closest(".modal"));
    }
  }).on("keydown", function(key) {
    if (key.keyCode == 27) {
      KMA.modalHide($(".modal:visible:last"));
    }
  }).on("click", ".modal > *", function(event) {
    event.stopPropagation();
    return true;
  });
  // $("#kmacb-form form").on("submit", function(event) {
  //     event.preventDefault();
  //     var name = $("#kmacb-form form input[name=name]").val()
  //       , phone = $("#kmacb-form form input[name=phone]").val()
  //       , form = $("form:first")
  //       , form_name = form.find("input[name=name]")
  //       , form_phone = form.find("input[name=phone]");
  //     form_name.val(name);
  //     form_phone.val(phone);
  //     form.trigger("submit");
  //     form_name.val("");
  //     form_phone.val("");
  // });
  $("form").append('<input type="hidden" name="jswork" value="1" />');
});
var KMA = (function($, $n) {
  return $.extend($n, {
    init: function() {
      var current = this;
      this.setTimezone();
      this.initDataCountry();
    },
    modalHide: function($modal) {
      $modal.fadeOut("fast", function() {
        if (!$(".modal:visible").length) {
          $("body").removeClass("modal-show");
        }
      });
    },
    modalRefresh: function() {
      if ($(".modal:visible:last").length) {
        var modalBlock = $(".modal:visible:last .modal-block"),
          width = parseInt(modalBlock.width()),
          height = parseInt(modalBlock.height());
        if ($(window).height() > height + 20) {
          modalBlock.addClass("modal-top").removeClass("margin-t-b").css("margin-top", -1 * (height / 2));
        } else {
          modalBlock.addClass("margin-t-b").removeClass("modal-top");
        }
        if ($(window).width() > width) {
          modalBlock.addClass("modal-left").removeClass("margin-l").css("margin-left", -1 * (width / 2));
        } else {
          modalBlock.addClass("margin-l").removeClass("modal-left");
        }
      }
    },
    modalShow: function($modal) {
      $modal.fadeIn("fast");
      $("body").addClass("modal-show");
      this.modalRefresh();
    },
    initCallback: function(timeout) {
      try {
        setTimeout(function start_kmacb() {
          $("#kmacb").show();
        }, timeout);
      } catch (e) {}
    },
    setTimezone: function() {
      var tz = new Date().getTimezoneOffset();
      $("form").append('<input type="hidden" name="timezone" value="' + tz + '" />');
    },
    setCountryField: function(country) {
      $("form").append("<input type='hidden' name='country' value='" + country + "' />");
    },
    checkAndSetCountryField: function(country) {
      if (!$("select[name=country]").length && !$("input[name=country]").length) {
        this.setCountryField(country);
      }
    },
    disableCountrySelect: function(country) {
      if ($("select[name=country]").length) {
        $("select[name=country]").attr("disabled", "disabled");
        this.setCountryField(country);
      }
    },
    initComebacker: function(timeout) {
      try {
        setTimeout(function start_kmacomebacker() {
          var comebacker = true;
          $(window).on("mouseout", function(event) {
            if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
              comebacker = false;
              $("a[modal=kmacb-form]").trigger("click");
            }
          });
        }, timeout);
      } catch (e) {}
    },
    // validateAndSendForm: function(jsonRequest, KMAText) {
    //     var current = this;
    //     $("form").submit(function() {
    //         if (!$(this).closest("#kmacb-form").length) {
    //             if (jsonRequest) {
    //                 current.prepareJsonData($(this));
    //             }
    //             $("input[name=name]", this).val($.trim($("input[name=name]", this).val()));
    //             if (!$("input[name=name]", this).val()) {
    //                 alert(KMAText.validation_name);
    //                 return false;
    //             }
    //             var phone_val = $("input[name=phone]", this).val();
    //             var reg1 = new RegExp("[^0-9]*","g")
    //               , reg2 = new RegExp("[^0-9-+ ()]","g");
    //             var phone_txt = phone_val.replace(reg1, "");
    //             if (phone_val.search(reg2) != -1) {
    //                 alert(KMAText.validation_phone1);
    //                 return false;
    //             }
    //             if (!phone_txt || phone_txt.length < 7) {
    //                 alert(KMAText.validation_phone2);
    //                 return false;
    //             }
    //             current.showComebackerAlert = false;
    //             return true;
    //         }
    //     });
    //     $("a.order-btn").click(function() {
    //         $(this).closest("form").submit();
    //         return false;
    //     });
    // },
    // prepareJsonData: function(form) {
    //     var datarow = form.serializeArray();
    //     var addressIsset = false;
    //     $(datarow).each(function(item, itemData) {
    //         if (itemData.name == "address") {
    //             addressIsset = true;
    //         }
    //         if (itemData.name == "name" || itemData.name == "phone" || itemData.name == "address") {
    //             delete datarow[item];
    //         }
    //     });
    //     if (addressIsset == false) {
    //         form.append("<input type='hidden' name='address' />");
    //     }
    //     form.find("input[name='address']").val($.JSON.encode(datarow));
    // },
    initVibrate: function(timeout) {
      setInterval(function() {
        try {
          if (window.navigator && window.navigator.vibrate) {
            navigator.vibrate([50, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30, 100, 30]);
          } else {
            navigator.vibrate(0);
          }
        } catch (err) {}
      }, timeout);
    },
    showComebackerAlert: true,
    initComebackerAlert: function(KMAText) {
      var current = this;
      window.onbeforeunload = function(evt) {
        if (current.showComebackerAlert) {
          current.showComebackerAlert = false;
          return KMAText.comebacker_text;
        }
      };
    },
    initDataCountry: function() {
      var current = this;
      $(".country_select").change(function() {
        current.changeDataCountry($(this).val());
      });
    },
    changeDataCountry: function(country) {
      $.each($("[data-kma-country]"), function() {
        var country_str = $(this).attr("data-kma-country").split(" ").join("").toUpperCase(),
          country_arr = country_str.split(","),
          change_class = ($(this).is("[data-kma-class]")) ? $(this).attr("data-kma-class") : undefined;
        if (country_arr.indexOf(country) > -1) {
          if (change_class != undefined) {
            $(this).addClass(change_class);
          } else {
            $(this).show();
          }
        } else {
          if (change_class != undefined) {
            $(this).removeClass(change_class);
          } else {
            $(this).hide();
          }
        }
      });
    }
  });
})(jQuery, KMA || {});
