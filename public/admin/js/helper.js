const renderMessage=(container,messageType,arrMessage)=>{
    let messageWrapper=document.createElement('ul');

    if(messageType==="success"){
        $(container).addClass('alert-success');
        $(container).removeClass('alert-danger');
    }else{
        $(container).addClass('alert-danger');
        $(container).removeClass('alert-success');
    }

    
    console.log(arrMessage);
    $(container).css('display','block');
    $(container).empty();
    let message='';
    console.log(arrMessage);
    arrMessage.forEach(element => {
        message=document.createElement('li');
        message.textContent=element;
        messageWrapper.appendChild(message)
    });

    container.append(messageWrapper);

    $("html, body").animate({ scrollTop: 0 }, "slow");
}