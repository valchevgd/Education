import java.util.Scanner;

public class P15_TailoringWorkshop {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int tables = Integer.parseInt(input.nextLine());
        double tableLength = Double.parseDouble(input.nextLine());
        double tableWidth = Double.parseDouble(input.nextLine());

        double singleCoveringArea = (tableLength + 0.6) * (tableWidth + 0.6);
        double totalCoveringArea = tables * singleCoveringArea;
        double KaroSize = tableLength / 2;
        double singleKaroArea = KaroSize * KaroSize;
        double totalKaroArea = tables * singleKaroArea;

        double totalCoveringPriceUSD = totalCoveringArea * 7;
        double totalCoveringPriceBGN = totalCoveringPriceUSD * 1.85;

        double totalKaroPriceUSD = totalKaroArea * 9;
        double totalKaroPriceBGN = totalKaroPriceUSD * 1.85;

        double totalPriceUSD = totalCoveringPriceUSD + totalKaroPriceUSD;
        double totalPriceBGN = totalCoveringPriceBGN + totalKaroPriceBGN;

        System.out.printf("%.2f USD%n", totalPriceUSD);
        System.out.printf("%.2f BGN", totalPriceBGN);
    }
}
