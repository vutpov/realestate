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

    // checkbox for propertyType

    $("#chkbox-proptyType").click(function(){
        if($(this).prop("checked") == true){
            document.location = "/system/PropTypes/trash";
        }else{
            document.location = "/system/PropTypes";
        }
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

        if($("#btnAdd").text()=='Cancel'){
            changeBtnContext('#btnAdd','1');
            return;
        }
        
       
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

    const detail = this.querySelector('#project-detail-body');

    detail.addEventListener('click', e => {
        
       console.log(e.target.tagName);
      
        console.log(e.target.className)
        
        console.log(e)


        if(e.target.tagName == 'A'){
            if(e.target.rel == 'edit'){
                getProjectItemForEdit($(e.target).attr('alt'));
            }else if(e.target.rel == 'delete'){

            }
        }
        
        
        
    });



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
        <td alt='${type.value}'>${stType}</td>
        <td alt='${code.value}'>${code.value}</td>
        <td alt='${description.value}'>${description.value}</td>
        <td alt='${no.value}'>${no.value}</td>
        <td alt='${st.value}'>${st.value}</td>
        <td alt='${$('#attribute').val()}'>${propAttribute}</td>
        <td alt='${cost.value}'>${cost.value}</td>
        <td alt='${price.value}'>${price.value}</td>
        <td alt='${free.value}'>${free.value}</td>
        <td alt='${
            publish.value
        }' class='pro-detail-publish'>${stPublish}</td>
        <td>
            <a alt=${rowCount - 1} rel="edit" href="#" class="btn btn-primary edit">Edit</a>
           
        </td>
        <td>
            <a alt=${rowCount - 1} rel="delete" href="#" class="btn btn-danger delete">Delete</a>  
        </td>

       

    `;

    $('#project-detail-body').append(row);

    const tCost = Number($('#tCost').text()) + Number(cost.value);

    const tPrice = Number($('#tPrice').text()) + Number(price.value);

    $('#tCount').text(rowCount);
    $('#tCost').text(tCost);
    $('#tPrice').text(tPrice);
}



function getProjectItemForEdit(rowIndex) {
    let row = document.querySelector(`.tr[alt="${rowIndex}"]`);
    console.log(row);
}

function showPropertyPopup(){

}
