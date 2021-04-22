let indice = 2;
document.querySelector('#addAjuste').addEventListener('click', () => {
    let tr = document.querySelector('body > section:nth-child(2) > div > div.col-9 > div > form > table > tbody > tr').innerHTML;
    tr = tr.replace('data_1', 'data_' + indice);
    tr = tr.replace('hora_entrada_1', 'hora_entrada_' + indice);
    tr = tr.replace('hora_saida_1', 'hora_saida_' + indice);
    tr = tr.replace('justificativa_1', 'justificativa_' + indice);
    tr = tr.replace('deleteAjuste_1', 'deleteAjuste_' + indice);
    document.querySelector('tbody').insertAdjacentHTML('beforeend', tr);
})


function deleteAjuste(id) {
    element = document.querySelector('#' + id)
    numberTrs = document.querySelectorAll('body > section:nth-child(2) > div > div.col-9 > div > form > table > tbody > tr');
    if (numberTrs.length != 1) {
        element.parentNode.parentNode.remove();
    } else {
        alert('Deve haver no minimo um campos para preenchimento');
    }

}