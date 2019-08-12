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
    const numberPattern = /^\d*\.?\d*$/;

    let hasError = false;

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
            } else {
                nextElement.innerText = $(item).attr('alt');
                $(parent).addClass('has-error');
                hasError = true;
            }
        });

        const inputNumber = document.querySelectorAll('.number-validate');

        inputNumber.forEach(item => {
            const nextElement = item.nextElementSibling;
            const parent = item.parentElement;
            const itemId = `${$(inputNumber).attr('id')}`;

            const val = document.getElementById(itemId).value;

            if (numberPattern.test(val.trim())) {
                $(parent).removeClass('has-error');
                nextElement.innerText = '';
            } else {
                nextElement.innerText = $(item).attr('alt');
                $(parent).addClass('has-error');
                hasError = true;
            }
        });

        if (!hasError) {
            addProjectDetail();
        }
    });

    let currentRowIndex = -1;

    const tableProjectDetail = this.querySelector('#table-project-detail');

    tableProjectDetail.addEventListener('click', e => {
        parentTag = $(e.target).parent();

        console.log(parentTag);

        if (
            parentTag.prop('tagName') == 'TR' &&
            !parentTag.hasClass('tr-heading')
        ) {
            const lastRow = `#table-project-detail tr[alt=${currentRowIndex}]`;
            console.log(lastRow);

            $(lastRow).removeClass('selected-row');

            $(tableProjectDetail);

            currentRowIndex = $(e.target)
                .parent()
                .attr('alt');
            $(e.target)
                .parent()
                .addClass('selected-row');
        }
    });

    $('#table-project-detail').click(e => {});

    $('.select2').select2({
        theme: 'classic',
        width: 'resolve',
    });

    /* Add property detail to project */
});

function addProjectDetail() {
    const type = document.querySelector('#propertyType');
    const code = document.querySelector('#code');
    const description = document.querySelector('#description');
    const no = document.querySelector('#no');
    const st = document.querySelector('#st');
    const propAttribute = $('#attribute').select2('data')[0].text;
    const cost = document.querySelector('#cost');
    const price = document.querySelector('#price');
    const free = document.querySelector('#free');
    const publish = document.querySelector('#publish');

    const stType = document.querySelector(
        `#propertyType option[value="${type.value}"]`
    ).innerText;
    const stPublish = document.querySelector(
        `#publish option[value="${type.value}"]`
    ).innerText;

    const rowCount = $('#table-project-detail td').closest('tr').length + 1;

    const row = `<tr class="detail-row" alt=${rowCount - 1}><td>${rowCount}</td>
        <td><div alt='${type.value}'></div>${stType}</td>
        <td>${code.value}</td>
        <td>${description.value}</td>
        <td>${no.value}</td>
        <td>${st.value}</td>
        <td>${propAttribute}</td>
        <td>${cost.value}</td>
        <td>${price.value}</td>
        <td>${free.value}</td>
        <td><div alt='${publish.value}'></div>${stPublish}</td>
    `;

    $('#project-detail-body').append(row);

    const tCost = Number($('#tCost').text()) + Number(cost.value);

    const tPrice = Number($('#tPrice').text()) + Number(price.value);

    $('#tCount').text(rowCount);
    $('#tCost').text(tCost);
    $('#tPrice').text(tPrice);
}
