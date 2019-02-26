import java.math.BigDecimal;
import java.util.Scanner;

public class P03_euroTrip {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double wurstsInKg = input.nextDouble();

        double princeInLv = wurstsInKg * 1.2;

        BigDecimal dmPrice = new BigDecimal("4210500000000");

        BigDecimal priceLv = new BigDecimal(princeInLv);

        BigDecimal totalPrice = dmPrice.multiply(priceLv);

        System.out.printf("%.2f marks", totalPrice);
    }
}
