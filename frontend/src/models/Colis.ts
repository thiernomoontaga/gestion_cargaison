import { Cargaison } from "./Cargaison";
import { TypeColis,EtatColis, typeMateriel } from "./enum";

export class Colis {

  constructor(
    private id: number,
    private poids: number,
    private typeColis:TypeColis,
    private etatColis:EtatColis = EtatColis.EN_ATTENTE,
    private cargaison:Cargaison,
    private typeMateriel?:typeMateriel,
    private DegreToxicite?: number
  ){}
  setCargaison(cargaison:Cargaison):void{
    this.cargaison = cargaison
  }
  getCargaison():Cargaison{
    return this.cargaison
  }
  getId():number{
    return this.id
  }
  setId(id: number):void{
    this.id = id
  }
  getPoids():number{
    return this.poids 
  }
  setPoids(poids: number){
    this.poids = poids
  }
  getTypeColis():TypeColis{
    return this.typeColis
  }
  setTypeColis(typeColis:TypeColis):void{
    this.typeColis = typeColis
  }
  getEtatColis():EtatColis{
    return this.etatColis
  }
  setEtatColis(etatColis: EtatColis):void{
    this.etatColis = etatColis
  }
  setTypeMateriel(typeMateriel: typeMateriel){
    this.typeMateriel = typeMateriel
  }
  getTypeMateriel(){
    return this.typeMateriel 
  }
  setDegreToxicite(DegreToxicite: number){
    this.DegreToxicite = DegreToxicite
  }
  getDegreToxicite(){
    return this.DegreToxicite
  }
}


