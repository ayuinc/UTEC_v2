jQuery(function ($) {
    $(document).ready(function () {
        $("#fb").click(function () {
            $("#ptw").addClass("hidden");
            $("#pfb").removeClass("hidden");
        });
        $("#tw").click(function () {
            $("#pfb").addClass("hidden");
            $("#ptw").removeClass("hidden");
        });
    });
});