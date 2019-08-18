function adicionarEndereco() {
    var checkbox = document.querySelector("input[name='adicionar-endereco']");
    var div = document.querySelector("div[role='adicionar-endereco']");
    
    !checkbox.checked ? div.style.display = 'block' : div.style.display = 'none';
}

function labelClicavel(event) {
    if (event.target.tagName != "LABEL") return;

    var label = {};
    label.for = event.target.attributes.for.value;

    var input = document.querySelector("input[name='" + label.for + "']");

    if (input.attributes.type.value != "checkbox") return;

    input.checked = !input.checked; // true -> false & vice-versa
}

var cpf = document.querySelector("input[name='cpf']");
var cep = document.querySelector("input[name='cep']");
var celular = document.querySelector("input[name='celular']");

cpf.onkeyup = function (event) {
    if (event.key == "Backspace" || event.key == "Delete") return;

    switch (event.target.value.length) {
        case 3:
        case 7:
            event.target.value += ".";
            break;
        case 11:
            event.target.value += "-";
            break;
    }
}

cep.onkeyup = function (event) {
    if (event.key == "Backspace" || event.key == "Delete") return;

    if (event.target.value.length == 5)
        event.target.value += "-";
}

celular.onkeyup = function (event) {
    if (event.key == "Backspace" || event.key == "Delete") return;

    if (event.key != "(" && event.key != "Shift" && event.key != ")" && event.key != "-") {
        switch (event.target.value.length) {
            case 1:
                event.target.value = "(" + event.target.value;
                break;
            case 4:
                event.target.value += ") ";
                break;
            case 10:
                event.target.value += "-";
                break;
            case 16:
                event.target.value = event.target.value.substring(0, 5)
                    + " " + event.target.value[6]
                    + " " + event.target.value.substring(7, 10)
                    + event.target.value[11]
                    + "-" + event.target.value.substring(12, 16);
                break;
        }
    }
}

document.onclick = function (event) {
    labelClicavel(event);
}