// $(document).ready(()=>{

    
//     $('#btnCancel').css('display','none');
//     column=['No','Name','Description','Action']
//     showDiff=[false,false,false,true];



//     let detail = new customTable($('#table'),column,showDiff);


//     $('#btnAdd').click((e)=>{
        
//         if($(e.target).text()==='Add'){
//             let id=$('#table tr').length;

//             let name=$('#name').val();

//             let description=$('#description').val();

//             let btn=`<Button class="btn btn-primary edit" alt=${id-1}>Edit</Button>
//                 <Button class="btn btn-danger delete" alt=${id-1}>Delete</Button>
//             `

           
//             detail.addRow([id,name,description,['edit',btn]])
            
//             // let value=detail.getValue(0);
            
//             // detail.setValue(0,1,'hello');

//             //console.log(value);
//             // detail.deleteRow(0);
//         }else{
//             let name=$('#name').val();
//             let description=$('#description').val();

//             detail.setValue(detail.selectedIndex,1,name);
//             detail.setValue(detail.selectedIndex,2,description);
            
//         }

        
        
//     });


//     const handleCancel=()=>{
//         $('#btnCancel').css('display','none');
//         $('#btnAdd').html('Add');
       
//     }

//     $('#btnCancel').click(()=>{handleCancel()});



//     $('#table').click((e)=>{
//         e.stopPropagation();
//         if($(e.target).hasClass('edit')){
//             var selectedIndex=Number($(e.target).attr('alt'));
//             let selectedRow=detail.getValue(selectedIndex);
           
//             console.log(selectedRow);
//             $('#name').val(selectedRow.name);
//             $('#description').val(selectedRow.description);

//             $('#btnAdd').html('Update');
//             $('#btnCancel').css('display','initial');

//             detail.selectedIndex=selectedIndex;  
//         }else if($(e.target).hasClass('delete')){
//             var selectedIndex=Number($(e.target).attr('alt'));
//             console.log(selectedIndex);
//             handleCancel(); 
//             $(e.target).parents('tr').remove();
//         }
//     })


// })


function checkIfExist(data,fallback){
    
   
    if(data instanceof  jQuery && data.length>0){
        if(fallback)
            fallback();
    }else{
        return false;
    }
    return true;
}


class customTable {

    consoleRed = 'background: #black; color: red';
    btnDelete='<button type="button" class="btn btn-danger custom-delete">Delete</button>';
    selectedIndex=null;
    constructor(elem,column,showDiff){

        if(checkIfExist(elem) && Array.isArray(column) && Array.isArray(showDiff)){
            this.table=elem;
            this.column=column;      
            this.showDiff=showDiff;
            $(elem).addClass('custom-datatable')
            let renderCol='';
            
            column.forEach(element => {
                renderCol+=`<th>${element}</th>`
            });
            

            let renderHead=`<thead><tr>${renderCol}</tr></thead><tbody class="custom-datatable-body"></tbody>"`
            
            elem.append(renderHead);
        }
    }
    

    addRow(row){

        let renderRow='';

        let renderAllCol='';
        row.forEach((data,key) => {
            let renderCol=''
            
            let col=this.column[key];
            
            if(this.showDiff[key]){

                renderRow+=`data-${col}="${data[0]}" `;

                renderCol=`<td>${data[1]}</td>`;
               
            }else{
                renderRow+=`data-${col}="${data}" `;

                renderCol=`<td>${data}</td>`;
            }
            

            renderAllCol+=renderCol;
        });

        

        renderRow=`<tr ${renderRow}>${renderAllCol}</tr>`; 

        this.table.find('tbody').append(renderRow);
       
    }

    getValue(row){
        let targetRow=$(this.table).find(".custom-datatable-body").find(`tr:nth-of-type(${row+1})`)
        
        return $(targetRow).data();
    }

    setValue(row,col,...value){
        
      
        let targetRow=$(this.table).find(".custom-datatable-body").find(`tr:nth-of-type(${row+1})`);
        let cell=$(targetRow).find(`td:nth-of-type(${col+1})`);
       
        let columnName=this.column[col];
        if(this.showDiff[col]){
            $(targetRow).attr(`data-${columnName}`,value[0]);
            $(cell).html(value[1]);
          
        }else{
            $(targetRow).attr(`data-${columnName}`,value[0]);
            $(cell).html(value[0]);
        }
    }

    

}




