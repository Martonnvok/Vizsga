import { kategoriak } from "./Leiro";

class Model{

    kategoria
    constructor(){
        this.kategoria = kategoriak; 
    }

    getKategoria(){
        return [...this.kategoria];
    }
}
export default Model;