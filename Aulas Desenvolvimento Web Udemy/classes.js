class Lancamento {
    constructor(nome = 'Genérico', valor = 0){
        this.nome = nome
        this.valor = valor
    }
}

class CicloFinanceiro {
    constructor(mes, ano) {
        this.mes = mes
        this.ano = ano
        this.lancamentos = []
    }

    addLancamentos(...lancamentos){
        lancamentos.forEach(l => this.lancamentos.push(l))
    }

    sumario(){
        let valorConsolidade = 0
        this.lancamentos.forEach(lk => {
            valorConsolidado += l.valor
        })
        return valorConsolidade
    }
}

const salario = new Lancamento('Salario', 4500)
const ciclo = new CicloFinanceiro(01, 2022)
ciclo.__proto__ = salario

console.log(ciclo.nome)

class Avo {
    constructor(sobrenome){
        this.sobrenome = sobrenome
    }
}

class Pai extends Avo {
    constructor(sobrenome, profissao = 'Professor'){
        super(sobrenome)
        this.profissao = profissao
    }
}

class Filho extends Pai {
    constructor(){
        super('Silva')
    }
}

const filho = new Filho

console.log(filho)