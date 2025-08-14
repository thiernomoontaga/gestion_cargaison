import {Personne} from './Personne'

export class Gestionnaire extends Personne{
  private login: string
  private password : string 

  constructor(id:number = 0 ,nom: string = '',prenom:string ='',email: string ,adresse: string = '',login: string = '' , password: string = ''
  ){
    super(id,nom,prenom,email,adresse)
    this.login = login
    this.password = password
  }
  public getLogin(): string {
    return this.login;
  }

  public getPassword(): string {
    return this.password;
  }

  public setLogin(login: string): void {
    this.login = login;
  }

  public setPassword(password: string): void {
    this.password = password;
  }

}


