import java.util.Scanner;

public class P04_FruitOrVegetable {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String product = input.nextLine();

        if ("banana".equalsIgnoreCase(product) || "apple".equalsIgnoreCase(product) || "kiwi".equalsIgnoreCase(product)
                || "cherry".equalsIgnoreCase(product) || "lemon".equalsIgnoreCase(product) || "grapes".equalsIgnoreCase(product)){
            System.out.println("fruit");
        }else if ("tomato".equalsIgnoreCase(product) || "cucumber".equalsIgnoreCase(product) || "pepper".equalsIgnoreCase(product)
                || "carrot".equalsIgnoreCase(product)){
            System.out.println("vegetable");
        }else {
            System.out.println("unknown");
        }
    }
}
