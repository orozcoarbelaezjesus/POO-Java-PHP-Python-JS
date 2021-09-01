public class Car {
    Integer id;
    String license;
    Account driver;
    protected Integer passengenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar(){
        System.out.println("License: " + license + " Name Driver: " + driver.name + " Passengers: " + passengenger);
    }

    public Integer getPassenger(){
        return passengenger;
    }

    public void setPassenger(Integer passenger){
        if(passenger == 4){
            this.passengenger = passenger;
        }
        else {
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }
}
