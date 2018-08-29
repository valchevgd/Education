import java.util.Scanner;

public class P24_SleepyTomCat {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int daysOff = Integer.parseInt(input.nextLine());

        int daysOffPlay = daysOff * 127;
        int otherDaysPlay = (365 - daysOff) * 63;
        int yearPlay = daysOffPlay + otherDaysPlay;

        double difference = Math.abs(yearPlay - 30000);
        double hours = difference / 60;
        double minutes = difference % 60;

        if (yearPlay > 30000){
            System.out.println("Tom will run away");
            System.out.printf("%.0f hours and %.0f minutes more for play", Math.floor(hours), Math.floor(minutes));
        }else {
            System.out.println("Tom sleeps well");
            System.out.printf("%.0f hours and %.0f minutes less for play", Math.floor(hours), Math.floor(minutes));
        }
    }
}
