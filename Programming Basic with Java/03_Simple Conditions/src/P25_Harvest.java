import java.util.Scanner;

public class P25_Harvest {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int vineyardArea = Integer.parseInt(input.nextLine());
        double grapes = Double.parseDouble(input.nextLine());
        int neededWine = Integer.parseInt(input.nextLine());
        int workers = Integer.parseInt(input.nextLine());

        double totalGrapes = vineyardArea * grapes;
        double grapesForWine = totalGrapes * 0.4;
        double wine = grapesForWine / 2.5;
        double difference = Math.abs(wine - neededWine);
        double winePerWorker = difference / workers;

        if (wine >= neededWine){
            System.out.printf("Good harvest this year! Total wine: %.0f liters.%n", Math.floor(wine));
            System.out.printf("%.0f liters left -> %.0f liters per person.", Math.ceil(difference), Math.ceil(winePerWorker));
        }else {
            System.out.printf("It will be a tough winter! More %.0f liters wine needed.", Math.floor(difference));
        }
    }
}
