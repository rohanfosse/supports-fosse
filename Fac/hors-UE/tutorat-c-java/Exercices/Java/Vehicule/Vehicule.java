public class Vehicule {
    //Attributs
    private static int nbInstances = 0;

    public String nom ;
    private String marque ;
    protected float vitesse ;

    protected Pneu[] pneus ;

    protected Moteur moteur ;


    //Constructeur
    public Vehicule(String nom, String marque, float vitesse){
        ++Vehicule.nbInstances;
        this.nom = nom;
        this.marque = marque;
        this.vitesse = vitesse;
    }

    //Méthodes
    //Accessor
    public String getMarque(){
        return this.marque;
    }

    public float getVitesse(){
        return this.vitesse;
    }

    public Pneu[] getPneus(){
        return this.pneus;
    }

    //Mutator
    public void setMarque(String newMarque){
        this.marque = newMarque;
    }

    public void setVitesse(float newVitesse){
        this.vitesse = newVitesse;
    }

    //Actions
    public void accelerer(float deltaVitesse){
        this.vitesse += deltaVitesse;
    }

    public void decelerer(float deltaVitesse){
        this.vitesse = Math.max(0f, this.vitesse - deltaVitesse);
    }

    public void freiner(){
        this.vitesse = 0;
    }


public static void main(String[] args) {
    
}



}
