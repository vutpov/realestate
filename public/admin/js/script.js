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

    const table = jQuery.makeArray($('.dataTable'));

    table.forEach(t => {
        $(t).DataTable();
    });

    $('#trash-check-staff').click(() => {
        const go_to_url = $('#trash-check-staff').val();

        console.log(go_to_url);

        document.location.href = go_to_url;
    });

    $('input[type=number]').keypress(e => {
        if ((e.which != 8 && e.which != 0 && e.which < 48) || e.which > 57) {
            e.preventDefault();
        }
    });

    $('[data-toggle="tooltip"]').tooltip();
    const stringPattern = /^(\w+\s)*\w+$/;
    const numberPattern = /^[0-9]{1,}$/;

    $('form#detail').submit(e => {
        e.preventDefault();

        const inputText = document.querySelectorAll('.text-validate');

        inputText.forEach(item => {
            const nextElement = item.nextElementSibling;
            const parent = item.parentElement;
            const itemId = `${$(inputText).attr('id')}`;

            const val = document.getElementById(itemId).value;

            if (stringPattern.test(val.trim())) {
                $(parent).removeClass('has-error');
                nextElement.innerText = '';
                console.log('error');
            } else {
                nextElement.innerText = $(item).attr('alt');
                $(parent).addClass('has-error');
            }
        });

        const inputNumber = document.querySelectorAll('.number-validate');

        inputNumber.forEach(item => {
            const nextElement = item.nextElementSibling;
            const parent = item.parentElement;
            const itemId = `${$(inputText).attr('id')}`;

            const val = document.getElementById(itemId).value;

            if (numberPattern.test(val.trim())) {
                $(parent).removeClass('has-error');
                nextElement.innerText = '';
            } else {
                nextElement.innerText = $(item).attr('alt');
                $(parent).addClass('has-error');
            }
        });
    });

    $('.select2').select2({
        theme: 'classic',
        width: 'resolve',
    });
});
