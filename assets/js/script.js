    document.getElementById('card-1').getElementsByClassName('API__card').style.backgroundColor = 'red'
    
    //configurações dos cards "Soluções"
    document.getElementById("openBanking").style.display = "flex"
    document.getElementById("pagamentoContas").style.display = "flex"
    document.getElementById("recargas").style.display = "flex"
    document.getElementById("transferencias").style.display = "flex"
    document.getElementById("btn-verMenos").style.display = "none"
    document.getElementsByClassName("API__card").style.backgroundColor = "red"
    
    //configuração de exibição do formulário
    document.getElementById("tab1").style.display = "inline-block"
    document.getElementById("voltar").style.display = "none"
    document.getElementById("falar").style.display = "none"
    document.getElementById("fechar").style.display = "none"
    document.getElementById("avancar").style.display = "inline-block"
    document.getElementById("passo1").style.backgroundColor = "#806DFB"

    
      function showItens(){
        document.getElementById("btn-verMais").style.display = "none"
        document.getElementById("cobranca").style.display = "flex"
        document.getElementById("saquesDepositos").style.display = "flex"
        document.getElementById("corbanService").style.display = "flex"
        document.getElementById("auto").style.display = "flex"
        document.getElementById("creditPlataform").style.display = "flex"
        document.getElementById("btn-verMenos").style.display = "flex"
      }
    
      function hideItens(){
        document.getElementById("btn-verMais").style.display = "flex"
        document.getElementById("cobranca").style.display = "none"
        document.getElementById("saquesDepositos").style.display = "none"
        document.getElementById("corbanService").style.display = "none"
        document.getElementById("auto").style.display = "none"
        document.getElementById("creditPlataform").style.display = "none" 
        document.getElementById("btn-verMenos").style.display = "none"
      }
    
      function next(n){
        document.getElementById("tab2").style.display = "block"
        document.getElementById("tab1").style.display = "none"
        document.getElementById("avancar").style.display = "none"
        document.getElementById("voltar").style.display = "inline-block"
        document.getElementById("falar").style.display = "inline-block"
        document.getElementById("passo2").style.backgroundColor = "#806DFB"
      }
    
      function back(n){
        document.getElementById("tab2").style.display = "none"
        document.getElementById("tab1").style.display = "inline-block"
        document.getElementById("avancar").style.display = "inline-block"
        document.getElementById("falar").style.display = "none"
        document.getElementById("voltar").style.display = "none"
      }
    
      function talk(n){
        document.getElementById("tab2").style.display = "none"
        document.getElementById("voltar").style.display = "none"
        document.getElementById("falar").style.display = "none"
        document.getElementById("fechar").style.display = "inline-block"
        document.getElementById("tab3").style.display = "inline-block"
      }


