import java.util.Scanner;

public class P23_DailyEarnings {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int workingDayInMonth = Integer.parseInt(input.nextLine());
        double moneyPerDay = Double.parseDouble(input.nextLine());
        double usdPerBgn = Double.parseDouble(input.nextLine());

        double moneyPerMonth = workingDayInMonth * moneyPerDay;
        double moneyPerYear = moneyPerMonth * 12;
        double yearBonus = moneyPerMonth * 2.5;
        double totalMoneyInYear = moneyPerYear + yearBonus;
        double taxes = totalMoneyInYear * 0.25;
        double clearMoneyYear = totalMoneyInYear - taxes;
        double totalMoneyBgn = clearMoneyYear * usdPerBgn;
        double bgnPerDay = totalMoneyBgn / 365;

        System.out.printf("%.2f", bgnPerDay);
    }
}
