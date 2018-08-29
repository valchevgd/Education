import java.util.Scanner;

public class P17_CharityCampaign {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double days = Double.parseDouble(input.nextLine());
        double cooks = Double.parseDouble(input.nextLine());
        double cakes = Double.parseDouble(input.nextLine());
        double wafers = Double.parseDouble(input.nextLine());
        double pancake = Double.parseDouble(input.nextLine());

        double moneyFromCakes = cakes * 45;
        double moneyFromWafers = wafers * 5.8;
        double moneyFromPancake = pancake * 3.2;
        double totalMoneyPerDay = (moneyFromCakes + moneyFromWafers + moneyFromPancake) * cooks;
        double totalMoney = totalMoneyPerDay * days;
        double spendMoney = totalMoney / 8;
        double saveMoney = totalMoney - spendMoney;

        System.out.printf("%.2f", saveMoney);
    }
}
