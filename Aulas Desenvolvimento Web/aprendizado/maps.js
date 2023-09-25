const nums = [1, 2, 3, 4, 5]

let resultado = nums.map(function(e) {
    return e * 2
})

Array.prototype.map2 = function(callback){
    callback(this.map(getPreco))
}

const carrinho = [
    '{ "nome": "Borracha", "preco": 3.45}',
    '{ "nome": "Caderno", "preco": 13.90}',
    '{ "nome": "Kit de Lapis", "preco": 41.22}',
    '{ "nome": "Caneta", "preco": 7.50}',
]

const getPreco = e => `R$ ${JSON.parse(e)["preco"]}`

carrinho.map2(function(valor) {
    console.log(valor)
})

