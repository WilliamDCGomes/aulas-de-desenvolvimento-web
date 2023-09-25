const ferrari = {
    modelo: 'F40',
    velMax: 324
}

const volvo = {
    modelo: 'V40',
    velMax: 200
}

console.log(ferrari.__proto__)

const avo = {
    attr1: 'A'
}

const pai = {
    __proto__: avo,
    attr2: 'B'
}

const filho = {
    __proto__:  pai,
    attr3: 'C'
}

console.log(filho.attr1)

const teste = Object.create(filho)
const teste2 = filho;

console.log(teste)
console.log(teste2)
console.log(teste == teste2)