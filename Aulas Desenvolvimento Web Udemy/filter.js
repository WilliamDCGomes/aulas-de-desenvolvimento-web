Array.prototype.filtrar = function(){
    console.log(this.filter(produtoCaro).filter(produtoFragil))
}

const produtos = [
    { nome: 'Notebook', preco: 2499, fragil: true },
    { nome: 'iPad Pro', preco: 4199, fragil: true },
    { nome: 'Copo de Vidro', preco: 12.49, fragil: true },
    { nome: 'Copo de Plástico', preco: 18.99, fragil: false },
]

const produtoCaro = p => p.preco > 500.0

const produtoFragil = p => p.fragil

produtos.filtrar()
