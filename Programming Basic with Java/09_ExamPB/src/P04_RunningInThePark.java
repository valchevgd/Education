import java.util.Scanner;

public class P04_RunningInThePark {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int days = Integer.parseInt(input.nextLine());
        int totalMinutes = 0;
        double totalDistanceInKm = 0;

        for (int i = 0; i < days; i++) {
            int minutes = Integer.parseInt(input.nextLine());
            double distance = Double.parseDouble(input.nextLine());
            String metric = input.nextLine();

            totalMinutes += minutes;
            if ("km".equals(metric)){
                totalDistanceInKm += distance;
            }else {
                totalDistanceInKm += distance / 1000;
            }
        }

        double calories = totalMinutes / 20.0 * 400;

        System.out.printf("He ran %.2fkm for %d minutes and burned %.0f calories.", totalDistanceInKm, totalMinutes, calories);
    }
}
