class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ-123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("QWE-567", new Account("Andrea Herrera", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}
