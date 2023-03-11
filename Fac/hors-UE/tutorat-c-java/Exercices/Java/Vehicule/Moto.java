public class Moto extends Vehicule {
    //Attributs filles
    private double volume;

    //Constructeur
    public Moto(String nom, String marque, float vitesse, double volume){
        super(nom);
        super(marque);
        super(vitesse)
        this.volume = volume;

        this.pneus = new Pneu[] {new Pneu(0.9), new Pneu(0.9)};

        this.moteur = new Moteur(120, "electrique");
    }

    //Methodes filles
    public void cabrer(){

    }
    
}

