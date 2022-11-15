Teste = function() {
    this.obj = {}

    this.getObject = function CriaObjeto(){
        this.obj = {
            _valor: 1,
            get valor() { return this._valor },
            set valor(valor){
                if(valor > this._valor){
                    this._valor = valor
                }
            }
        }
        console.log(this.obj.valor)
        this.obj.valor = 55
        console.log(this.obj.valor)
        return this.obj
    }
}

const test = new Teste()

console.log(test.getObject().valor)

test.obj.nome = "William"

console.log(test.obj.nome)
console.log(test.obj)
