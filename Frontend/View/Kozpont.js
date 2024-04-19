class Kozpont {
    szuloElem;
    adat = [];

    constructor(szuloElem, adat) {
        this.szuloElem = szuloElem;
        this.adat = adat;


        this.#adatok();
    }

    #adatok() {
        let txt = `
      <div class="container">
      
  </div>`

        for (let index = 0; index < this.adat.length; index++) {

            txt += `
                <h2>Mennyi 2 + 6</h2>
            <div class="row">
                <div class="col"><input type="checkbox">2</div>
                <div class="col"><input type="checkbox">3</div>
                <div class="w-100"></div>
                <div class="col"><input type="checkbox">8</div>
                <div class="col"><input type="checkbox">5</div>
            </div>`
        }

        this.szuloElem.append(txt);
    }
}
export default Kozpont;