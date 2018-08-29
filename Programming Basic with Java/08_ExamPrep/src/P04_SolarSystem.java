import java.util.Scanner;

public class P04_SolarSystem {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String planet = input.nextLine();
        int daysAtPlanet = Integer.parseInt(input.nextLine());
        double astroWeek = 226;
        double distance = 0;

        switch (planet){
            case "Mercury":
                if (daysAtPlanet > 7){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 0.61;
                }
                break;
            case "Venus":
                if (daysAtPlanet > 14){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 0.28;
                }
                break;
            case "Mars":
                if (daysAtPlanet > 20){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 0.52;
                }
                break;
            case "Jupiter":
                if (daysAtPlanet > 5){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 4.2;
                }
                break;
            case "Saturn":
                if (daysAtPlanet > 3){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 8.52;
                }
                break;
            case "Uranus":
                if (daysAtPlanet > 3){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 18.21;
                }
                break;
            case "Neptune":

                if (daysAtPlanet > 2){
                    System.out.println("Invalid number of days!");
                }else {
                    distance = 29.09;
                }
                break;
                default:
                    System.out.println("Invalid planet name!");
                    break;
        }

        distance *= 2;
        double totalDays = distance * astroWeek + daysAtPlanet;

        if (distance > 0){
            System.out.printf("Distance: %.2f%n", distance);
            System.out.printf("Total number of days: %.2f", totalDays);
        }
    }
}
