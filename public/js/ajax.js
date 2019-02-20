$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$( document ).ready(function(){
    init();
});

function init(){
    var editables = document.getElementsByClassName("editable");

    for(var i = 0, length = editables.length; i<length; i++){

        button = document.createElement("button");
        button.textContent = "Editar";
        button.addEventListener("click", clickiti);

        editables[i].appendChild(button);

    }
}

function clickiti(e){
    var t = e.target
    var parent = t.parentNode;
    var editar = parent.getElementsByTagName("p")[0];

    if(editar){
        var input = document.createElement("input");
        
        input.value = editar.textContent;
        parent.insertBefore(input, editar);
        parent.removeChild(editar);
    }else{
        var input = parent.getElementsByTagName("input")[0];
        var p = document.createElement("p");

        p.textContent = input.value;
        parent.insertBefore(p, input);
        parent.removeChild(input);

        postData(parent.dataset.tabla, parent.dataset.id, parent.dataset.atributo, p.textContent);
    }
}

function postData(tabla, id, atributo, dAtributo, e){
    if(!dAtributo) return

    var datos = {};
    var url = '/'+tabla+'/'+id;
    datos[atributo] = dAtributo;

    $.ajax({
        type:'PUT',
        url:url,
        data: datos,
        success:function(data){
        }
    });

}