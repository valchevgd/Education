import java.util.Scanner;

public class P20_VegetableMarket {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double vegetablePrice = Double.parseDouble(input.nextLine());
        double fruitPrice = Double.parseDouble(input.nextLine());
        int totalVegetableKg = Integer.parseInt(input.nextLine());
        int totalFruitKg = Integer.parseInt(input.nextLine());

        double totalVegetablePriceLv = vegetablePrice * totalVegetableKg;
        double totalFruitPriceLv = fruitPrice * totalFruitKg;

        double totalPriceEu = (totalFruitPriceLv + totalVegetablePriceLv) / 1.94;

        System.out.println(totalPriceEu);
    }
}
