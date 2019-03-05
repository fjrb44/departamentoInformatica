$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
});

$(document).ready(function() {
    init();
});

function init() {
    var editables = document.getElementsByClassName('editable');

    for (var i = 0, length = editables.length; i < length; i++) {
        button = document.createElement('button');
        button.textContent = 'Editar';
        button.addEventListener('click', clickiti);

        button.classList.add('btn');
        button.classList.add('btn-primary');

        editables[i].appendChild(button);
    }
}

function clickiti(e) {
    var t = e.target;
    var parent = t.parentNode;
    var editar = parent.firstElementChild;
    var input = parent.getElementsByTagName('input')[0];

    if(!editar) return;

    if (!editar.style.display || editar.style.display === "block") {
        editar.style.display = "none";

        input = document.createElement('input');

        input.value = editar.textContent;
                
        parent.insertBefore(input, editar.nextSibling);
    } else {
        editar.style.display = "block";

        parent.removeChild(input);

        postData(
            parent.dataset.tabla,
            parent.dataset.id,
            parent.dataset.atributo,
            p.textContent,
        );
    }
}

function postData(tabla, id, atributo, dAtributo, e) {
    if (!dAtributo) return;

    var datos = {};
    var url = '/api/' + tabla + '/' + id;
    datos[atributo] = dAtributo;

    $.ajax({
        type: 'PUT',
        url: url,
        data: datos,
        success: function(data) {},
    });
}

