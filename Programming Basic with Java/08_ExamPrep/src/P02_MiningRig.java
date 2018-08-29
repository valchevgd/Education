import java.util.Scanner;

public class P02_MiningRig {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int videoPrice = Integer.parseInt(input.nextLine());
        int adapterPrice = Integer.parseInt(input.nextLine());
        double electricPerDay = Double.parseDouble(input.nextLine());
        double colectedMoneyPerDay = Double.parseDouble(input.nextLine());

        double ringPrice = videoPrice * 13 + adapterPrice * 13 + 1000;
        double earnedMoneyPerDay = 13 * (colectedMoneyPerDay - electricPerDay);
        double timeToBack =ringPrice / earnedMoneyPerDay;

        System.out.printf("%.0f%n", ringPrice);
        System.out.printf("%.0f", Math.ceil(timeToBack));
    }
}
