import java.util.Scanner;

public class P18_AlcoholMarket {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double whiskeyPrice = Double.parseDouble(input.nextLine());
        double beerNeeded = Double.parseDouble(input.nextLine());
        double wineNeeded = Double.parseDouble(input.nextLine());
        double rakiaNeeded = Double.parseDouble(input.nextLine());
        double whiskeyNeeded = Double.parseDouble(input.nextLine());

        double rakiaPrice = whiskeyPrice / 2;
        double winePrice = rakiaPrice - (rakiaPrice * 0.4);
        double beerPrice = rakiaPrice - (rakiaPrice * 0.8);

        double totalWhiskeyPrice = whiskeyPrice * whiskeyNeeded;
        double totalRakiaPrice = rakiaPrice * rakiaNeeded;
        double totalWinePrice = winePrice * wineNeeded;
        double totalBeerPrice = beerPrice * beerNeeded;

        double totalPrice = totalWhiskeyPrice + totalRakiaPrice + totalWinePrice + totalBeerPrice;

        System.out.printf("%.2f", totalPrice);
    }
}
