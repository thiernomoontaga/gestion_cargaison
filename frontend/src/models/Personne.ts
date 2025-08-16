export abstract class Personne{
  constructor(
    protected id: number,
    protected nom:string,
    protected prenom: string,
    protected adresse: string,
    protected email?:string,
  ){

  }
}

