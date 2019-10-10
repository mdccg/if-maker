function criaModal(log, src) {
    let transicao = 0.4,
        html = `
        <div class="eclipse bkgd_000">
            <div class="modal">
                <span>${log}</span>
                <img src="${src}" alt="sz" />
            </div>
        </div>
        `;
    
    let dom = new DOMParser().parseFromString(html, 'text/html'),
        tag = dom.firstChild.lastChild.firstChild; // document > html > body > tag

    document.body.appendChild(tag);
    
    tag.style.transitionDuration = transicao + 's';

    setTimeout(function() {
        tag.style.opacity = '0';

        setTimeout(function() {
            tag.parentNode.removeChild(tag);
        }, 1e3 * transicao);
    }, 2e3);
}

this.window.addEventListener('load', function() {
    let url = new URL(window.location.href),
        cadastrado = url.searchParams.get('cadastrado');

    switch(cadastrado) {
        case 'true':
            criaModal('Usuário cadastrado com sucesso!', './img/coracao.svg');
            break;
        
        case 'false':
            criaModal('Ouch, o servidor tem um coração<br>'
                + 'partido!', './img/coracao-quebrado.png');
            break;
        
        default:
            break;
    }
});