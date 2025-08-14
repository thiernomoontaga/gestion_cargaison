import {TypeCargaison} from './enum/TypeCargaison';
import {Avancement} from './enum/Avancement';
import {EtatGlobal} from './enum/EtatGlobal';
import {Colis} from './Colis';
export class Cargaison{
  private id: number;
  private numero: string;
  private prix: number;
  private typeCargaison:TypeCargaison | string;
  private Avancement: Avancement | string;
  private EtatGlobal: EtatGlobal | string;
  private lieuDepart: string;
  private lieuArriver: string;
  private colis: Colis[] = []
  constructor(id:number,numero: string,prix: number,typeCargaison: TypeCargaison | string,Avancement: Avancement | string,EtatGlobal: EtatGlobal | string,lieuDepart: string,lieuArriver: string)
  {
    this.id = id;
    this.numero = numero;
    this.prix = prix;
    this.typeCargaison = typeCargaison;
    this.Avancement = Avancement;
    this.EtatGlobal = EtatGlobal;
    this.lieuDepart = lieuDepart;
    this.lieuArriver = lieuArriver;
  }
  public getId(): number {
    return this.id;
  }

  public getNumero(): string {
    return this.numero;
  }

  public getPrix(): number {
    return this.prix;
  }

  public setId(id: number): void {
    this.id = id;
  }

  public setNumero(numero: string): void {
    this.numero = numero;
  }

  public setPrix(prix: number): void {
    this.prix = prix;
  }

  public getLieuDepart(): string {
    return this.lieuDepart;
  }

  public getLieuArriver(): string {
    return this.lieuArriver;
  }

  public setLieuDepart(lieuDepart: string): void {
    this.lieuDepart = lieuDepart;
  }

  public setLieuArriver(lieuArriver: string): void {
    this.lieuArriver = lieuArriver;
  }
  public setTypeCargaison(typeCargaison: TypeCargaison):void{
    this.typeCargaison = typeCargaison;
  }
  public setEtatAvancement(Avancement: Avancement | string):void{
      this.Avancement = Avancement ;
  }
  public setEtatGlobal(EtatGlobal: EtatGlobal| string):void{
    this.EtatGlobal = EtatGlobal;
  }
  public getEtatAvancement(){
    return this.Avancement ;
  }
  public getEtatGlobal(){
    return this.EtatGlobal;
  }
  public getTypeCargaison(){
    return this.typeCargaison;
  }
  public getColis(){
    return this.colis; 
  }
  public setColis(colis: Colis[]){
    this.colis = colis;
  }
}



