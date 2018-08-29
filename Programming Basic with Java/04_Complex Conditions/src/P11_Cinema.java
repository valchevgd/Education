import java.util.Scanner;

public class P11_Cinema {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String type = input.nextLine().toLowerCase();
        int rows = input.nextInt();
        int colons = input.nextInt();

        int capacity = rows * colons;
        double price = 0;

        if ("premiere".equals(type)){
            price = 12.0;
        }else if ("normal".equals(type)){
            price = 7.5;
        }else if ("discount".equals(type)){
            price = 5.0;
        }

        double totalMoney = price * capacity;
        System.out.printf("%.2f", totalMoney);
    }
}
