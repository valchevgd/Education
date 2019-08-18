import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;

public class P09_SoftUniParking {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = Integer.parseInt(scanner.nextLine());

        Map<String, String> parkingRegister = new LinkedHashMap<>();

        for (int i = 0; i < num; i++) {

            String[] tokens = scanner.nextLine().split(" ");

            String username = tokens[1];

            if (tokens.length > 2) {
                String plateNumber = tokens[2];
                registerCar(username, plateNumber, parkingRegister);
            } else {

                unregisterCar(username, parkingRegister);
            }


        }

        for (Map.Entry<String, String> entry : parkingRegister.entrySet()) {
            System.out.printf("%s => %s%n", entry.getKey(), entry.getValue());
        }

    }

    private static void unregisterCar(String username, Map<String, String> parkingRegister) {

        if (parkingRegister.containsKey(username)) {

            parkingRegister.remove(username);
            System.out.printf("%s unregistered successfully%n", username);
        } else {
            System.out.printf("ERROR: user %s not found%n", username);
        }
    }

    private static void registerCar(String username, String plateNumber, Map<String, String> parkingRegister) {

        if (parkingRegister.containsKey(username)) {
            System.out.printf("ERROR: already registered with plate number %s%n", parkingRegister.get(username));
        } else {

            parkingRegister.put(username, plateNumber);

            System.out.printf("%s registered %s successfully%n", username, plateNumber);
        }

    }
}
