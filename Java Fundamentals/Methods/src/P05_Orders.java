import java.util.Scanner;

public class P05_Orders {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String product = scanner.nextLine();
        int quantity = scanner.nextInt();

        printTotalPrice(product, quantity);
    }

    private static void printTotalPrice(String product, int quantity) {

        double totalPrice = 0.0;

        switch (product) {

            case "coffee":
                totalPrice = quantity * 1.5;
                break;
            case "water":
                totalPrice = quantity * 1.0;
                break;
            case "coke":
                totalPrice = quantity * 1.4;
                break;
            case "snacks":
                totalPrice = quantity * 2.0;
        }

        System.out.printf("%.2f", totalPrice);
    }
}
