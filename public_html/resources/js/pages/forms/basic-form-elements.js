$(function () {
    moment.locale('es');

    //Textare auto growth
    autosize($('textarea.auto-growth'));

    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm',
        clearButton: true,
        weekStart: 1
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'dddd - DD/MM/YYYY',
        clearButton: true,
        clearText:'Limpiar',
        nowButton:true,
        nowText:'Ir a Hoy',
        cancelText:'Cancelar',
        weekStart: 1,
        time: false,
        lang:'fr',
    });


    $('.fechaIngreso').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        clearText:'Limpiar',
        nowButton:true,
        nowText:'Ir a Hoy',
        cancelText:'Cancelar',
        weekStart: 1,
        time: false,
        lang:'fr',
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
});