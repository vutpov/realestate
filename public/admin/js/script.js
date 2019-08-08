$(function() {
    $('.datepicker').datepicker({
        autoclose: true,
    });

    $('.datemask').inputmask('dd/mm/yyyy', { placeholder: 'dd/mm/yyyy' });

    $('#example1').DataTable();
    $('#example2').DataTable({
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
    });
});

const table = jQuery.makeArray($('.dataTable'));

table.forEach(t => {
    $(t).DataTable();
});

// this will be triggered when the first button was clicked
$('#trash-check-staff').click(() => {
    // this will find the selected website from the dropdown
    let go_to_url = $('#trash-check-staff').val();

    console.log(go_to_url);
    // this will redirect us in same window
    document.location.href = go_to_url;
});
