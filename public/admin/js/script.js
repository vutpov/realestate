$(function () {





    function checkIfExist(data, fallback) {

        if (data instanceof jQuery && data.length > 0) {
            // console.log(data);
            fallback();
        }

    }

    $('.dataTable').DataTable({
        'autoWidth': true,        
    });


    const makeTwoScrolledTable=()=>{

        let dataTableWidth=$('.dataTable tbody').width()+'px';
        let boxBodyWidth=$('.box-body').width()+'px';
    
    
        let dummy=`<div class="dummy-wrapper">
                <div class="dummy"></div>
            </div>`;
    
        let twoScrolledWrapper=$('.two-scrolled-wrapper');
    
        $(twoScrolledWrapper).prepend(dummy);
    
    
        // console.log(dataTableWidth,boxBodyWidth);
        $('.dummy').css('width',dataTableWidth);
        $('.dummy-wrapper').css('width',boxBodyWidth);
        
    
        $(".dummy-wrapper").scroll(function(){
            $(".table-responsive").scrollLeft($(".dummy-wrapper").scrollLeft());
        });
        $(".table-responsive").scroll(function(){
            $(".dummy-wrapper").scrollLeft($(".table-responsive").scrollLeft());
        });
    }



    makeTwoScrolledTable();






    const makeDatePicker = () => {
        $('.datepicker').datepicker({
            autoclose: true,
        })
    };
    checkIfExist($('.datepicker'), makeDatePicker);


    const makeInputmask = () => {
        $('.datemask').inputmask('dd/mm/yyyy', { placeholder: 'dd/mm/yyyy' });
    };
    checkIfExist($('.datemask'), makeInputmask);



    const makeSelect2 = () => {
        $('.select2').select2({
            theme: 'classic',
            width: 'resolve',
        });
    }

    checkIfExist($('.select2'), makeSelect2);









    $('#trash-check-staff').click(() => {
        const go_to_url = $('#trash-check-staff').val();

        console.log(go_to_url);

        document.location.href = go_to_url;
    });

    // checkbox for propertyType

    $("#chkbox-proptyType").click(function () {
        if ($(this).prop("checked") == true) {
            document.location = "/system/PropTypes/trash";
        } else {
            document.location = "/system/PropTypes";
        }
    });

    $('input[type=number]').keypress(e => {
        if ((e.which != 8 && e.which != 0 && e.which < 48) || e.which > 57) {
            e.preventDefault();
        }
        
    });


    const stringPattern = /^(\w+\s)*\w+$/;
    const numberPattern = /^\d*\.?\d*$/;

    let hasError = false;

    $('form#detail').submit(e => {
        e.preventDefault();

        if ($("#btnAdd").text() == 'Cancel') {
            changeBtnContext('#btnAdd', '1');
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









    const renderResponseMessage = (response) => {
        console.log(response.responseJSON.data);
        let responseJSON = response.responseJSON;

        let showMessage = document.createElement('ul');
        let dataToRender = '';


        console.log(responseJSON);
        if (responseJSON.failOnValidate == true) {

            dataToRender = responseJSON.error;
            $('.show-message').addClass('alert-danger');
            $('.show-message').removeClass('alert-success');

        } else {
            dataToRender = responseJSON.success;

            $('.show-message').addClass('alert-success');
            $('.show-message').removeClass('alert-danger');
        }


        if (responseJSON.failOnValidate) {
            for (var data in dataToRender) {
                let messageList = document.createElement('li');
                let message = document.createTextNode(dataToRender[data]);
                messageList.appendChild(message);
                showMessage.appendChild(messageList);
                $('.show-message').html(showMessage);

            }
        } else {
            $('.show-message').html(dataToRender);
        }

        $('.show-message').css('display', 'block');
        //console.log(responseJSON);


        window.scrollTo(0, 0);

    }

    //clear toggle active class


    $('.my-switch').removeClass('active');



    let defaultTooltip = {
        'placement': 'bottom',
        'title': '',
        'trigger':'manual'
    };

    
    $('[data-toggle="tooltip"]').tooltip(defaultTooltip);

    $('[data-toggle="tooltip"]').removeAttr('data-original-title');




    //currency input

    $("input[data-type='currency']").on({
        keyup: function() {
          formatCurrency($(this));
        },
        blur: function() { 
          formatCurrency($(this), "blur");
        }
    });
    
    
    function formatNumber(n) {
      // format number 1000000 to 1,234,567
      return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
    
    
    function formatCurrency(input, blur) {
      // appends $ to value, validates decimal side
      // and puts cursor back in right position.
      
      // get input value
      var input_val = input.val();
      
      // don't validate empty input
      if (input_val === "") { return; }
      
      // original length
      var original_len = input_val.length;
    
      // initial caret position 
      var caret_pos = input.prop("selectionStart");
        
      // check for decimal
      if (input_val.indexOf(".") >= 0) {
    
        // get position of first decimal
        // this prevents multiple decimals from
        // being entered
        var decimal_pos = input_val.indexOf(".");
    
        // split number by decimal point
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);
    
        // add commas to left side of number
        left_side = formatNumber(left_side);
    
        // validate right side
        right_side = formatNumber(right_side);
        
        // On blur make sure 2 numbers after decimal
        if (blur === "blur") {
          right_side += "00";
        }
        
        // Limit decimal to only 2 digits
        right_side = right_side.substring(0, 2);
    
        // join number by .
        input_val = "$" + left_side + "." + right_side;
    
      } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        input_val = "$" + input_val;
        
        // final formatting
        if (blur === "blur") {
          input_val += ".00";
        }
      }
      
      // send updated string to input
      input.val(input_val);
    
      // put caret back in the right position
      var updated_len = input_val.length;
      caret_pos = updated_len - original_len + caret_pos;
      input[0].setSelectionRange(caret_pos, caret_pos);
    }

    $('.check-table').click(e=>{
        e.stopPropagation();
        
        if($(e.target).hasClass('first-cell')){

            
           
            var checkBoxes = $(e.target).children();;
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
        }
    });




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

    const stType = $(
        `#propertyType option[value="${type.value}"]`
    ).html();
    const stPublish = $(
        `#publish option[value="${publish.value}"]`
    ).html();

    const rowCount = $('#table-project-detail td').closest('tr').length + 1;

    const row = `<tr alt="${rowCount - 1}" id="detail-row-${rowCount - 1}"><td>${rowCount}</td>
        <td rel="type" alt='${type.value}'>${stType}</td>
        <td rel="code" alt='${code.value}'>${code.value}</td>
        <td rel="description" alt='${description.value}'>${description.value}</td>
        <td rel="no" alt='${no.value}'>${no.value}</td>
        <td rel="st" alt='${st.value}'>${st.value}</td>
        <td rel="propertyAttribute" alt='${$('#attribute').val()}'>${propAttribute}</td>
        <td rel="cost" alt='${cost.value}'>${cost.value}</td>
        <td rel="price" alt='${price.value}'>${price.value}</td>
        <td rel="free" alt='${free.value}'>${free.value}</td>
        <td rel="publish" alt='${
        publish.value
        }' class='pro-detail-publish'>${stPublish}</td>
        <td>
            <a rel="edit"  class="btn btn-primary edit">Edit</a>
           
        </td>
        <td>
            <a rel="delete" class="btn btn-danger delete">Delete</a>  
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
    var children = document.querySelector(`#detail-row-${rowIndex}`).children;
    children = Array.from(children);
    var data = [];


    children
        .filter(e => {
            return typeof $(e).attr('rel') !== 'undefined'
        })
        .forEach(e => {
            data[$(e).attr('rel')] = $(e).attr('alt')
        });

    showPropertyPopup(data);

}

function showPropertyPopup(data) {
    $('#trigger-detail').modal();
    const type = document.querySelector('#propertyType');
    const code = document.querySelector('#code');
    const description = document.querySelector('#description');
    const no = document.querySelector('#no');
    const st = document.querySelector('#st');

    const cost = document.querySelector('#cost');
    const price = document.querySelector('#price');
    const free = document.querySelector('#free');
    const publish = document.querySelector('#publish');



    $('#attribute').val(data["propertyAttribute"]);
    $('#attribute').select2().trigger('change');


    setSelect(type, data['type']);

    code.value = data['code'];
    description.value = data['description'];
    no.value = data['no'];
    st.value = data['st'];

    cost.value = data['cost'];
    price.value = data['price'];
    free.value = data['free'];
    st.value = data['st'];

    setSelect(publish, data['publish']);

    

}


function deleteDetail(rowIndex) {
    let row = document.querySelector(`#detail-row-${rowIndex}`);
    row.remove();

    let table = document.querySelector(`#project-detail-body`);

    resetId(table)
}

function resetId(table) {
    let rows = table.children;

    rows = Array.from(rows);


    rows.forEach((value, index) => {
        console.log(index, value);
        value.setAttribute('id', `detail-row-${index}`);
        value.setAttribute('alt', index);
        value.children[0].innerText = index + 1;
    });

}

function changeSummaryValue() {

}





function setSelect(select, data) {
    const typeChildren = Array.from(select.children);

    typeChildren.forEach(child => {
        if (child.value == data) {
            select.value = data;
        }
    });
}
