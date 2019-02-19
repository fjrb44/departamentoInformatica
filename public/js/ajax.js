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
        //button = editables[i].getElementsByTagName("button")[0];
        button = document.createElement("button");
        button.textContent = "Editar";
        button.addEventListener("click", clickiti);

        editables[i].appendChild(button);
    }
    //button.addEventListener("click", clickiti);
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
    }
}

function postData(tabla, id, atributo, dAtributo, e){
    //console.log(e);
    //e.preventDefault();

    //var texto = $("input[name=texto]").val();
    var datos = {};
    var url = '/'+tabla+'/'+id;
    datos[atributo] = dAtributo;

    console.log(url);

    $.ajax({
        type:'PUT',
        url:url,
        data: datos,
        success:function(data){
            alert(data.success);
        }
    });

}