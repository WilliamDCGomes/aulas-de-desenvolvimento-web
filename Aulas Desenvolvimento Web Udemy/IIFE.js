function Teste () {
    console.log('teste')

    this.Testar = function() {
        console.log("Testando")
    }
}

var test = new Teste()


test.Testar()