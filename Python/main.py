from car import Car
from account import Account

if __name__ == "__main__":

    print("Hola mundo");
    
    car = Car("AMS-234", Account("Andres Herrera", "AND876"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("QWE-567", Account("Andrea Herrera", "ANDA123"))
    print(vars(car2))
    print(vars(car.driver))