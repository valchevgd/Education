import java.util.Scanner;

public class P11_USDToBGN {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double usd = Double.parseDouble(input.nextLine());
        double bgn = usd * 1.79549;
        System.out.printf("%.2f BGN", bgn);
    }
}
