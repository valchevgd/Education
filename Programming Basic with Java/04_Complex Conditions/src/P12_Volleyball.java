import java.util.Scanner;

public class P12_Volleyball {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String year = input.nextLine();
        int holidays = input.nextInt();
        int weekendsAtHome = input.nextInt();

        int weekendsInSofia = 48 - weekendsAtHome;
        double playsInSofia = weekendsInSofia * 0.75;
        double holidaysPlays = holidays * (2.0 / 3);
        double totalPlays = playsInSofia + holidaysPlays + weekendsAtHome;

        if ("leap".equals(year)){
            totalPlays = totalPlays + (totalPlays * 0.15);
        }

        System.out.printf("%.0f", Math.floor(totalPlays));


    }
}
