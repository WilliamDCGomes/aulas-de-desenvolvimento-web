class Test {
    constructor(teste){
        this.testes = teste
    }

    testando(){
       return this.testes
    }
}

const obj = new Test("Teste")
obj.nome = "William"

console.log(obj.testando())
console.log(obj.nome)