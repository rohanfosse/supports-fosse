public class Voiture extends Vehicule {
    //Attributs filles
    private int nbPlaces;
    private double tailleCoffre;

    //Constructeur
    public Voiture(String nom, String marque, float vitesse, int nbPlaces){
        super(nom);
        super(marque);
        super(vitesse)
        this.nbPlaces = nbPlaces;

        this.pneus = new Pneu[] {new Pneu(0.5), new Pneu(0.5), new Pneu(0.5), new Pneu(0.5)};

        this.moteur = new Moteur(80, "diesel");
    }

    //Methodes filles
    public void reculer(){
      vitesse *= -1;
    }
    
    public static void main(String[] args) {
        Voiture maVoiture = new Voiture("Marylin", "Audi", 220, 5);
        Voiture taVoiture = new Voiture("Bobby", "Citroen", 180, 2);
        
        maVoiture.avancer();
        taVoiture.reculer();
        
        maVoiture.getMarque();
        taVoiture.setVitesse(150);
        
        System.out.println( nbInstances + " véhicules ont été créés.");
        
    
}
   }
