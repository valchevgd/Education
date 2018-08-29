import java.util.Scanner;

public class P02_SmallShop {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String product = input.nextLine();
        String town = input.nextLine();
        double quantity = Double.parseDouble(input.nextLine());

        double price = 0;

        if ("sofia".equalsIgnoreCase(town)){
            if ("coffee".equalsIgnoreCase(product)){
                price = 0.5;
            }else if ("water".equalsIgnoreCase(product)){
                price = 0.8;
            }else if ("beer".equalsIgnoreCase(product)){
                price = 1.2;
            }else if ("sweets".equalsIgnoreCase(product)){
                price = 1.45;
            }else if ("peanuts".equalsIgnoreCase(product)){
                price = 1.6;
            }
        }else if ("plovdiv".equalsIgnoreCase(town)){
            if ("coffee".equalsIgnoreCase(product)){
                price = 0.4;
            }else if ("water".equalsIgnoreCase(product)){
                price = 0.7;
            }else if ("beer".equalsIgnoreCase(product)){
                price = 1.15;
            }else if ("sweets".equalsIgnoreCase(product)){
                price = 1.3;
            }else if ("peanuts".equalsIgnoreCase(product)){
                price = 1.5;
            }
        }else if ("varna".equalsIgnoreCase(town)) {
            if ("coffee".equalsIgnoreCase(product)) {
                price = 0.45;
            } else if ("water".equalsIgnoreCase(product)) {
                price = 0.7;
            } else if ("beer".equalsIgnoreCase(product)) {
                price = 1.1;
            } else if ("sweets".equalsIgnoreCase(product)) {
                price = 1.35;
            } else if ("peanuts".equalsIgnoreCase(product)) {
                price = 1.55;
            }
        }

        double sum = price * quantity;
        System.out.println(sum);
    }
}
