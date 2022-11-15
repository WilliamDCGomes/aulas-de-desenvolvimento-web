class Test {
    constructor(teste){
        this.testes = teste
    }

    testando(){
       return this.testes
    }
}

const obj = new Test("Teste")

console.log(obj.testando())