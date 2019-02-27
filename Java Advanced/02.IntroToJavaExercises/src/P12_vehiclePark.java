import java.util.ArrayList;
        import java.util.Arrays;
        import java.util.List;
        import java.util.Scanner;
        import java.util.LinkedList;

public class P12_vehiclePark {

    private static final String END_OF_LOOP = "End of customers!";

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);


        String[] vehicles = input.nextLine().split("\\s+");
        List<String> vehiclesList = new LinkedList<String>(Arrays.asList(vehicles));

        int sealsVehicles = 0;

        while (true){

            String line = input.nextLine();

            if (END_OF_LOOP.equals(line)){
                break;
            }

            char model = (char)(line.charAt(0) + 32);
            int numberOfSeats = Integer.valueOf(line.split("\\s+")[2]);
            String vehicle = "" + model + numberOfSeats;

            if (vehiclesList.contains(vehicle)){
                int price = model * numberOfSeats;

                vehiclesList.remove(vehicle);

                sealsVehicles++;

                System.out.printf("Yes, sold for %d$%n", price);
            }else {
                System.out.println("No");
            }
        }

        StringBuilder vehiclesLeft = new StringBuilder("Vehicles left: ");

        for (int i = 0; i < vehiclesList.size(); i++) {
            vehiclesLeft.append(vehiclesList.get(i));

            if (vehiclesList.size() > i + 1){
                vehiclesLeft.append(", ");
            }
        }

        System.out.println(vehiclesLeft);
        System.out.printf("Vehicles sold: %d", sealsVehicles);
    }
}
