import Model from "../Modell/model";
import Kozpont from "../View/kozpont";

class Controller{

    model;
    kozpont;
    constructor(){
        this.model = Model();
        this.kozpont = Kozpont($(".backend"), this.model.getKategoria());

    }
}
export default Controller;