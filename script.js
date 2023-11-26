document.getElementById("transform").addEventListener("click",function(){
    event.preventDefault()
    const valor = document.getElementById("numeroinicial").value
    const deesto = document.getElementById("entrada").value
    const aesto = document.getElementById("salida").value
    const resultado = document.getElementById("resultad")

    class calculos {
        sobremil() {
            resultado.innerHTML=(valor / 1000)
        }
        pormil() {
            resultado.innerHTML=(valor * 1000)
        }
        porunm() {
            resultado.innerHTML=(valor * 1000000)
        }
        porunb(){
            resultado.innerHTML=(valor * 1000000000)
        }
        sobreunm(){
            resultado.innerHTML=(valor / 1000000)
        }
        sobreunb(){
            resultado.innerHTML=(valor / 1000000000)
        }
      }

      let sobremil = new calculos();
      let pormil = new calculos();
      let porunm = new calculos();
      let sobreunm = new calculos();
      let porunb = new calculos();
      let sobreunb = new calculos();

    if (deesto == aesto)
    resultado.innerHTML=valor

    if (deesto == "1" && aesto == "2")
    sobremil.sobremil();
    if (deesto == "1" && aesto == "3")
    sobreunm.sobreunm();
    if (deesto == "1" && aesto == "4")
    sobreunb.sobreunb();

    if (deesto == "2" && aesto == "1")
    pormil.pormil();
    if (deesto == "2" && aesto == "3")
    sobremil.sobremil();
    if (deesto == "2" && aesto == "4")
    sobreunm.sobreunm();


    if (deesto == "3" && aesto == "1")
    porunm.porunm();
    if (deesto == "3" && aesto == "2")
    pormil.pormil();
    if (deesto == "3" && aesto == "4")
    sobremil.sobremil();

    if (deesto == "4" && aesto == "1")
    porunb.porunb();
    if (deesto == "4" && aesto == "2")
    porunm.porunm();
    if (deesto == "4" && aesto == "3")
    pormil.pormil();
})
document.getElementById("restable").addEventListener("click",function(){
    const resultado = document.getElementById("resultad")
    resultado.innerHTML = "-";
})
