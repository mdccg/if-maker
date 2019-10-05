let url = new URL(window.location.href),
    cadastrado = url.searchParams.get('cadastrado');

switch(cadastrado) {
    case 'true':
        criaModal('Usuário cadastrado com sucesso!');
        break;
    
    case 'false':
        criaModal('Burro do caralho, deu input no <br>formato errado!');
        break;
    
    default:
        break;
}

function criaModal(log) {
    let transicao = 0.4,
        html = `
        <div class="eclipse bkgd_000">
            <div class="modal">
                <span>${log}</span>
                <img src="./img/coracao.svg" alt="sz" />
            </div>
        </div>
        `;
    
    let dom = new DOMParser().parseFromString(html, 'text/html'),
        tag = dom.firstChild;

    document.body.appendChild(tag);

    tag.style.transitionDuration = transicao + 's';

    setTimeout(function() {
        tag.style.opacity = '0';

        setTimeout(function() {
            tag.parentNode.removeChild(tag);
        }, 1e3 * transicao);
    }, 2e3);
}