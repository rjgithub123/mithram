// Sidebar Menu Section - Start
$(document).ready(function () {
    // Top-level menu toggle
    $(document).on("click", ".nav-list > .has-sub > .nav-link", function (e) {
        e.stopPropagation();
        const $parent = $(this).parent();
        const $subnav = $(this).next("ul.subnav");

        const isOpen = $parent.hasClass("open");

        $(".nav-list > .has-sub").removeClass("open").children("ul.subnav").slideUp("slow");

        if (!isOpen) {
            $parent.addClass("open");
            $subnav.slideDown("slow");
        }
    });

    // Submenu of submenu toggle (independent)
    $(document).on("click", ".has-subnav > .nav-link", function (e) {
        e.stopPropagation();
        const $parent = $(this).parent();
        const $subnav = $(this).next(".subnav");

        $parent.toggleClass("open");
        $subnav.stop(true, true).slideToggle("slow");

        // Optional: Close siblings if needed (remove if multiple subnavs should stay open)
        $parent.siblings(".has-subnav").removeClass("open").children(".subnav").slideUp("slow");
    });

    // Close entire nav on outside click
    $(document).on("click", function (e) {
        if (!$(e.target).closest(".nav-list").length) {
            $(".nav-list > .has-sub").removeClass("open").children("ul.subnav").slideUp("slow");
            $(".has-subnav").removeClass("open").children(".subnav").slideUp("slow");
        }
    });
});
// Sidebar Menu Section - End

$(document).ready(function () {

    $("#menuToggle").click(function () {
        $("body").toggleClass("sidebar-toggle");
    })
    
    // Data table - Start
    let table = new DataTable('#myTable');
    // End
    
    // Datepicker - Start
    // $("#inputBirthDate").datepicker({
    //     maxDate: "-21y +0m +0w"
    // });
    $('#inputBirthDate').daterangepicker({
        "singleDatePicker": true,
        "maxDate": moment().subtract(21, 'years'), // Restricts selection to today or past dates
        "startDate": moment().subtract(21, 'years'), // Defaults to today
    });
    // End

});
// End 
// View details - Edit details
$(document).ready(function () {
    $("#editBtn").click(function () {
        $(this).parents("form").find(".form-control, .form-select, .form-check-input[type=checkbox]").prop("disabled", function (_, val) {
            return !val;
        });
        // $(this).next("#updateBtn").removeClass("d-none");
        $(this).addClass("d-none").next("#updateBtn").removeClass("d-none");
    });
});
// View details - Edit details - End
// Custom checkbox with child - start
$(document).ready(function () {
    $(".maincheckbox-wrp .maincheckbox").change(function () {
        if ($(this).is(":checked")) {
            $(this).parents(".maincheckbox-wrp").find(".dependent-main[type=radio]").prop("disabled", false);
        } else {
            $(this).parents(".maincheckbox-wrp").find(".dependent-main[type=radio]").prop("disabled", true).prop("checked", false);
        }
    });

    $(".maincheckbox-wrp .dependent").change(function () {
        let mainCheckbox = $(this).parents(".maincheckbox-wrp").find(".maincheckbox");
        let anyChecked = $(this).parents(".maincheckbox-wrp").find(".dependent-main:checked").length > 0;

        // If any dependent checkbox is checked, keep the main checkbox checked
        mainCheckbox.prop("checked", anyChecked);
    });
    
});
// Custom checkbox with child - end
// Daterangepicker start
$(document).ready(function () {
    $('#orderRange').daterangepicker({
        autoUpdateInput: false, // Prevent automatic input update
        locale: {
            cancelLabel: 'Clear'
        },
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "maxDate": moment(), // Restrict future dates
    });
    // When user selects a date range, update the input
    $('#orderRange').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    // When user clicks "Clear", empty the input
    $('#orderRange').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

    $('#reportrange').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });
    $('#filterActivity').daterangepicker({
        // "singleDatePicker": true,
        ranges: {
            'Today': [moment(), moment()],
            'Current Week': [moment().startOf('week'), moment().endOf('week')],
            'Current Month': [moment().startOf('month'), moment().endOf('month')]
        },
        "startDate": moment(), // Defaults to today
        "endDate": moment(), // Defaults to today
        "maxDate": moment(), // Restrict future dates
    });
    $('#upcomingActivity').daterangepicker({
        // "singleDatePicker": true,
        ranges: {
            'Tomorrow': [moment().add(1, 'day'), moment().add(1, 'day')],
            'Next Week': [moment().add(1, 'week').startOf('week'), moment().add(1, 'week').endOf('week')],
            'Next Month': [moment().add(1, 'month').startOf('month'), moment().add(1, 'month').endOf('month')]
        },
        "startDate": moment().add(1, 'day'), // Defaults to tomorrow
        "endDate": moment().add(1, 'day'), // Defaults to tomorrow
        "minDate": moment().add(1, 'day'), // Restricted date selection up to today
        // "endDate": "02/19/2025"
    });
    $('#upcomingCalibration').daterangepicker({
        // "singleDatePicker": true,
        ranges: {
            'Tomorrow': [moment().add(1, 'day'), moment().add(1, 'day')],
            'Next Week': [moment().add(1, 'week').startOf('week'), moment().add(1, 'week').endOf('week')],
            'Next Month': [moment().add(1, 'month').startOf('month'), moment().add(1, 'month').endOf('month')]
        },
        "startDate": moment().add(1, 'day'), // Defaults to tomorrow
        "endDate": moment().add(1, 'day'), // Defaults to tomorrow
        "minDate": moment().add(1, 'day'), // Restricted date selection up to today
        // "endDate": "02/19/2025"
    });
    $('#ordersReport').daterangepicker({
        // "singleDatePicker": true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "startDate": moment(), // Defaults to today
        "endDate": moment(), // Defaults to today
        "maxDate": moment(), // Restrict future dates
    });
    $('#workInProgressReport').daterangepicker({
        // "singleDatePicker": true,
        ranges: {
            // 'Today': [moment(), moment()],
            // 'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'This Week': [moment().startOf('week'), moment().endOf('week')],
            'Last Week': [moment().subtract(1, 'week').startOf('week'), moment().subtract(1, 'week').endOf('week')],
            'Last 15 Days': [moment().subtract(14, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            // 'This Month': [moment().startOf('month'), moment().endOf('month')],
            // 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "startDate": moment(), // Defaults to today
        "endDate": moment(), // Defaults to today
        "maxDate": moment(), // Restrict future dates
    });
    $('#inputNextRecalibDate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        "minDate": moment().add(1, 'day'), // Restricted date selection up to today
    });
    $('#inputRetirementDate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        "startDate": moment().subtract(1, 'days'), // Restrict future dates
        "maxDate": moment().subtract(1, 'days') // Restrict future dates
    });
    $('#inputRetirementRecalibDate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        "startDate": moment().subtract(1, 'days'), // Restrict future dates
        "maxDate": moment().subtract(1, 'days') // Restrict future dates
    });
    $('#inputMfrDate').daterangepicker({
        "singleDatePicker": true,
        "maxDate": moment(), // Restrict future dates
        locale: {
            format: 'MM/YYYY'
        }
    });
    $('#inputDateOfCalibration').daterangepicker({
        "singleDatePicker": true,
        "maxDate": moment(), // Restrict future dates
    });
    $('#inputDateOfCalibrationRepair').daterangepicker({
        "singleDatePicker": true,
        "maxDate": moment(), // Restrict future dates
    });
});
// Daterangepicker end

// Select 2 - Start
$(document).ready(function(){
    $(".custom-select-pill").select2({
        width: '100%',
        selectionCssClass: "form-control d-flex align-items-center shadow-none rounded-pill border border-common ps-1"
    });
    $(".custom-select").select2({
        width: '100%',
        selectionCssClass: "form-control d-flex align-items-center shadow-none rounded border border-common ps-1"
    });
})
// Select 2 - End
$(document).ready(function() {
    $("#addRecalibData").change(function () {
        if ($(this).is(":checked")) {
            $("#recalibData").slideDown("slow");
        } else {
            $("#recalibData").slideUp("slow");
        }
    });
});

// 
$(document).ready(function() {
    $("#repairCompleted").change(function () {
        if ($(this).is(":checked")) {
            $("#repairAndCalibration").slideDown("slow");
        } else {
            $("#repairAndCalibration").slideUp("slow");
        }
    });
});

/****************Image Preview****************/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
/*********************End*********************/