import { Personne } from "./Personne";

export class Gestionnaire extends Personne{
  constructor(
     id:number,
     nom: string,
     prenom: string,
     adresse:string,
     private login:string,
     private password:string,
     email?: string,
    
  ){
    super(id,nom,prenom,adresse,email)
    
  }
  getLogin(){
    return this.login
  }
  setLogin(login:string){
    this.login = login
  }
  getPassword(){
    return this.password

  }
  setPassword(password: string){
    this.password = password
  } 
}

