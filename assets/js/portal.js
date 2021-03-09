var $input = document.getElementById('input-file'),
    $fileName = document.getElementById('file-name');
var nome = document.getElementById('nome');
var direcao = document.getElementById('direcao');
var elenco = document.getElementById('elenco');
var duracao = document.getElementById('duracao');
var ano = document.getElementById('ano');
var pais = document.getElementById('pais');

nome.addEventListener('focus', () => {
    nome.style.borderColor = "#4A5F6A";
});
nome.addEventListener('blur', () => {
    nome.style.borderColor = "#ccc";
});


direcao.addEventListener('focus', () => {
    direcao.style.borderColor = "#4A5F6A";
});
direcao.addEventListener('blur', () => {
    direcao.style.borderColor = "#ccc";
});


elenco.addEventListener('focus', () => {
    elenco.style.borderColor = "#4A5F6A";
});
elenco.addEventListener('blur', () => {
    elenco.style.borderColor = "#ccc";
});


duracao.addEventListener('focus', () => {
    duracao.style.borderColor = "#4A5F6A";
});
duracao.addEventListener('blur', () => {
    duracao.style.borderColor = "#ccc";
});


ano.addEventListener('focus', () => {
    ano.style.borderColor = "#4A5F6A";
});
ano.addEventListener('blur', () => {
    ano.style.borderColor = "#ccc";
});


pais.addEventListener('focus', () => {
    pais.style.borderColor = "#4A5F6A";
});
pais.addEventListener('blur', () => {
    pais.style.borderColor = "#ccc";
});



$input.addEventListener('change', function () {
    $fileName.textContent = this.value;
});