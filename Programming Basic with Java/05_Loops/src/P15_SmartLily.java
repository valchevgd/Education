import java.util.Scanner;

public class P15_SmartLily {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        byte years = Byte.parseByte(input.nextLine());
        float washingMachinePrice = Float.parseFloat(input.nextLine());
        byte toyPrice = Byte.parseByte(input.nextLine());

        double moneyCounter = 0;
        double toysCounter = 0;
        double moneyCounterPrevYear = 0;

        for (int i = 2; i <= years; i += 2) {
            moneyCounterPrevYear += 10;
            moneyCounter += moneyCounterPrevYear - 1;
        }
        for (int i = 1; i <= years ; i += 2) {
            toysCounter ++;
        }

        double totalMoneyFromToys = toysCounter * toyPrice;
        double totalMoney = totalMoneyFromToys + moneyCounter;

        if (totalMoney >= washingMachinePrice){
            System.out.printf("Yes! %.2f", totalMoney - washingMachinePrice);
        }else {
            System.out.printf("No! %.2f", washingMachinePrice - totalMoney);
        }
    }
}
