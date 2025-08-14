export abstract class Personne{
  protected id: number
  protected nom: string
  protected prenom: string
  protected email : string | null
  protected adresse: string

  constructor(id: number,prenom: string,email: string | null,adresse: string,nom: string){
    this.id = id
    this.nom = nom
    this.prenom = prenom
    this.adresse = adresse
    this.email = email
  }
  public getId(): number {
    return this.id;
  }

  public getNom(): string {
    return this.nom;
  }

  public getPrenom(): string {
    return this.prenom;
  }

  public getEmail(): string | null{
    return this.email;
  }

  public getAdresse(): string {
    return this.adresse;
  }

  public setId(id: number): void {
    this.id = id;
  }

  public setNom(nom: string): void {
    this.nom = nom;
  }

  public setPrenom(prenom: string): void {
    this.prenom = prenom;
  }

  public setEmail(email: string | null): void {
    this.email = email;
  }

  public setAdresse(adresse: string): void {
    this.adresse = adresse;
  }
  
}

