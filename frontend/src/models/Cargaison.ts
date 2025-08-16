import { Colis } from './Colis';
import { EtatAvancement, EtatGlobal, TypeCargaison } from './enum';

export {EtatAvancement,TypeCargaison,EtatGlobal} from './enum'

export class Cargaison {
  private colis:Colis[] = []

  constructor(
    private id:number,
    private numero: string,
    private prix: number,
    private NombreColis: number,
    private typeCargaison:TypeCargaison,
    private etatGlobal:EtatGlobal,
    private etatAvancement:EtatAvancement,
    private lieuDepart: string,
    private lieuArriver:string

  ){}
  addColis(colis:Colis):void{
    this.colis.push(colis)
    this.NombreColis = this.colis.length
  }
  getColis():Colis[]{
    return this.colis
  }
  getId():number{
    return this.id
  }
  setId(id: number):void{
    this.id = id
  }
  getNumero():string{
    return this.numero
  }
  setNumero(numero:string):void{
    this.numero = numero
  }
  getPrix():number{
    return this.prix 
  }
  setPrix(prix: number):void{
    this.prix = prix
  }
  getNombreColis():number{
    return this.NombreColis
  }
  setNombreColis(NombreColis : number):void{
    this.NombreColis = NombreColis
  }
  getTypeCargaison():TypeCargaison{
    return this.typeCargaison
  }
  setTypeCargaison(typeCargaison:TypeCargaison):void{
    this.typeCargaison = typeCargaison
  }
  getEtatGlobal():EtatGlobal{
    return this.etatGlobal
  }
  setEtatGlobal(etatGlobal: EtatGlobal):void{
    this.etatGlobal = etatGlobal
  }
  getEtatAvancement():EtatAvancement{
    return this.etatAvancement
  }
  setEtatAvancement(etatAvancement: EtatAvancement):void{
    this.etatAvancement = etatAvancement
  }
  getLieudepart():string{
    return this.lieuDepart
  }
  setLieudepart(lieuDepart:string):void{
    this.lieuDepart = lieuDepart
  }
  getLieuArriver():string{
    return this.lieuArriver
  }
  setLieuArriver(lieuArriver:string):void{
    this.lieuArriver = lieuArriver
  }
}




