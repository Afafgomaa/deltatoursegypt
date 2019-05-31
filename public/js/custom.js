
jQuery(function () {
        jQuery("#datepickerArrival2").datepicker({
            defaultDate: '+2d',
            dateFormat: 'dd/mm/yy',
            showOn: "both",
            buttonText: "<i class='fa fa-calendar'></i>",
            buttonImageOnly: false,
            minDate: 2,
            onClose: function (selectedDate) {
                jQuery("#datepickerDeparture2").datepicker("option", "minDate", selectedDate);
            }
        });
        jQuery("#datepickerDeparture2").datepicker({
            defaultDate: "+1d",
            dateFormat: 'dd/mm/yy',
            showOn: "both",
            buttonText: "<i class='fa fa-calendar'></i>",
            buttonImageOnly: false,
            minDate: 0,
        });
    });



    