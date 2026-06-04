"use strict";
jQuery,
    jQuery(document).ready(function (o) {
        0 < o(".offset-side-bar").length &&
            o(".offset-side-bar").on("click", function (e) {
                e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
            }),
            0 < o(".close-side-widget").length &&
                o(".close-side-widget").on("click", function (e) {
                    e.preventDefault(), o(".cart-group").removeClass("isActive");
                }),
            0 < o(".navSidebar-button").length &&
                o(".navSidebar-button").on("click", function (e) {
                    e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
                }),
            0 < o(".patient-form-toggler").length &&
                o(".patient-form-toggler").on("click", function (e) {
                    e.preventDefault(), e.stopPropagation();
                    var stickyParent = o(this).closest(".patient-form-sticky");
                    if (!stickyParent.hasClass("is-expanded")) {
                        stickyParent.addClass("is-expanded");
                    } else {
                        // Avoid triggering if the minimize button was clicked
                        if (!o(e.target).closest(".patient-form-minimize").length) {
                            window.open("includes/new-patient-form.pdf", "_blank");
                        }
                    }
                }).on("mouseenter", function (e) {
                    var stickyParent = o(this).closest(".patient-form-sticky");
                    if (!stickyParent.hasClass("is-expanded")) {
                        stickyParent.addClass("is-expanded");
                    }
                }),
            0 < o(".patient-form-sticky").length &&
                o(".patient-form-sticky").on("mouseleave", function (e) {
                    o(this).removeClass("is-expanded");
                }),
            0 < o(".patient-form-minimize").length &&
                o(".patient-form-minimize").on("click", function (e) {
                    e.preventDefault(), e.stopPropagation();
                    o(this).closest(".patient-form-sticky").removeClass("is-expanded");
                }),
            0 < o(".close-side-widget").length &&
                o(".close-side-widget").on("click", function (e) {
                    e.preventDefault(), o(".info-group").removeClass("isActive"), o(".patient-form-sticky").removeClass("is-expanded");
                }),
            o("body").on("click", function (e) {
                o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive"), o(".patient-form-sticky").removeClass("is-expanded");
            }),
            o(".xs-sidebar-widget, .patient-form-toggler").on("click", function (e) {
                e.stopPropagation();
            }),
            0 < o(".xs-modal-popup").length &&
                o(".xs-modal-popup").magnificPopup({
                    type: "inline",
                    fixedContentPos: !1,
                    fixedBgPos: !0,
                    overflowY: "auto",
                    closeBtnInside: !1,
                    callbacks: {
                        beforeOpen: function () {
                            this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                        },
                    },
                });
    });
