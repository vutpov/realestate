const renderMessage=(container,messageType,...arrMessage)=>{
    let messageWrapper=document.createElement('ul');

    if(messageType==="success"){
        $(container).addClass('alert-success');
        $(container).removeClass('alert-danger');
    }else if(messageType==="error"){
        $(container).addClass('alert-danger');
        $(container).removeClass('alert-success');
    }

    
    //console.log(container);
    $(container).css('display','block');
    $(container).empty();
    let message='';
    //console.log(arrMessage);
    arrMessage.forEach(element => {
        message=document.createElement('li');
        message.textContent=element;
        messageWrapper.appendChild(message)
    });

    container.append(messageWrapper);

    $("html, body").animate({ scrollTop:  $(container).offset().top-100 }, "slow");
};


const clearBtnAddData=(elem,data)=>{


    $(elem).removeData(data);
    $(elem).removeAttr(`data-${data}`);

    
}



const roundToTwo=(num)=> {    
    return +(Math.round(num + "e+2")  + "e-2");
};

function roundUp(num, precision) {
    precision = Math.pow(10, precision)
    return Math.ceil(num * precision) / precision
}

function roundDown(num, precision) {
    precision = Math.pow(10, precision)
    return Math.floor(num * precision) / precision
}




const paddingDate=(data)=>{
    return Number(data)<10?`0${data}`:data;
}

const formatDateYMD=(date)=>{
    return `${date.getFullYear()}-${paddingDate(date.getMonth()+1)}-${paddingDate(date.getDate())}`;
}




