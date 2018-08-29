import java.util.Scanner;

public class P22_Money {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int bitCoins = Integer.parseInt(input.nextLine());
        double jpy = Double.parseDouble(input.nextLine());
        double commission = Double.parseDouble(input.nextLine());

        double jpyInUsd = jpy * 0.15;
        double usdInBgn = jpyInUsd * 1.76;
        double bitCoinsInBgn = bitCoins * 1168;
        double totalInBgn = usdInBgn + bitCoinsInBgn;
        double commissionPreCent = commission / 100;
        double totalCommission = totalInBgn * commissionPreCent;
        double moneyToChange = totalInBgn - totalCommission;
        double euros = moneyToChange / 1.95;

        System.out.println(euros);
    }
}
