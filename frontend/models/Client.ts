import {Personne} from './Personne'

export class Client extends Personne{
  constructor(id:number,nom: string,prenom: string,email: string,adresse: string){
    super(id,nom,prenom,adresse,email)
  }
}

