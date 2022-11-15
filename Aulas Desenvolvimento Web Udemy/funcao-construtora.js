function Carro(velocidadeMaxima = 200, delta = 5){
    let velocidadeAtual = 0

    this.acelerar = function () {
        if(velocidadeAtual + delta <= velocidadeMaxima){
            velocidadeAtual += delta;
        }
        else{
            velocidadeAtual = velocidadeMaxima
        }
    }

    this.getVelocidadeAtual = function(){
        return velocidadeAtual
    }
}

const uno = new Carro(150)
uno.acelerar()
console.log(uno.getVelocidadeAtual())