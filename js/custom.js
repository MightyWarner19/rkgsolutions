$(window).on("load", function () {
    "use strict";
    $(window).on("scroll", function () {
        $(this).scrollTop() > 450 ? $(".navbar-fixed-top").addClass("opaque") : $(".navbar-fixed-top").removeClass("opaque");
    }),
        $(".navbar-nav li a").on("click", function (e) {
            $(".navbar-collapse").collapse("hide");
        }),
        $("#navbarCollapse").onePageNav({ filter: ":not(.external)" }),
        $(".navbar-nav li a, a.scrool").on("click", function (e) {
            var a = this.href.split("#")[1],
                t = $("#" + a).offset().top;
            return $("html,body").animate({ scrollTop: t - 70 }, 1e3), !1;
        }),
        $(".newsletter-form").each(function () {
            var e = $(this);
            e.submit(function (a) {
                a.isDefaultPrevented() ||
                    (jQuery.post(this.action, { email: $('input[name="nf_email"]').val() }, function (a) {
                        e.fadeOut("fast", function () {
                            $(this).siblings("p.newsletter_success_box").show();
                        });
                    }),
                        a.preventDefault());
            });
        }),
        $("#register-form").each(function () {
            var e = $(this);
            e.submit(function (a) {
                a.isDefaultPrevented() ||
                    (jQuery.post(this.action, { names: $('input[name="register_names"]').val(), email: $('input[name="register_email"]').val(), ticket: $('select[name="register_ticket"]').val() }, function (a) {
                        e.fadeOut("fast", function () {
                            $(this).siblings("p.register_success_box").show();
                        });
                    }),
                        a.preventDefault());
            });
        }),
        $("#contact-form").each(function () {
            var e = $(this);
            e.submit(function (a) {
                a.isDefaultPrevented() ||
                    (jQuery.post(
                        this.action,
                        {
                            names: $('input[name="contact_names"]').val(),
                            phone: $('input[name="contact_phone"]').val(),
                            email: $('input[name="contact_email"]').val(),
                            ticket: $('select[name="contact_ticket"]').val(),
                            message: $('textarea[name="contact_message"]').val(),
                        },
                        function (a) {
                            e.fadeOut("fast", function () {
                                $(this).siblings("p.contact_success_box").show();
                            });
                        }
                    ),
                        a.preventDefault());
            });
        });
}),
    $(".popup-gallery")
        .find("a.popup1")
        .magnificPopup({ type: "image", gallery: { enabled: !0 } }),
    $(".popup-gallery")
        .find("a.popup2")
        .magnificPopup({ type: "image", gallery: { enabled: !0 } }),
    $(".popup-gallery")
        .find("a.popup3")
        .magnificPopup({ type: "image", gallery: { enabled: !0 } }),
    $(".popup-gallery")
        .find("a.popup4")
        .magnificPopup({ type: "iframe", gallery: { enabled: !1 } });
