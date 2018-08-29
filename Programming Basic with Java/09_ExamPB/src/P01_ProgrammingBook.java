import java.util.Scanner;

public class P01_ProgrammingBook {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double singlePagePrice = Double.parseDouble(input.nextLine());
        double singleCoverPrice = Double.parseDouble(input.nextLine());
        int discount = Integer.parseInt(input.nextLine());
        double designPrice = Double.parseDouble(input.nextLine());
        int discountByTeam = Integer.parseInt(input.nextLine());


        double totalPrintingPrice = (singlePagePrice * 899) + (singleCoverPrice * 2);
        double printingDiscountPreCent = discount / 100.0;
        double finalePrintingPrice = totalPrintingPrice - (totalPrintingPrice * printingDiscountPreCent);
        double priceWithDesign = finalePrintingPrice + designPrice;
        double teamDiscountPreCent =  discountByTeam / 100.0;
        double finalePrice = priceWithDesign - (priceWithDesign * teamDiscountPreCent);



        System.out.printf("Avtonom should pay %.2f BGN.", finalePrice);
    }
}
