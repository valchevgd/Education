import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;

public class P06_ListOfProducts {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = Integer.parseInt(scanner.nextLine());

        List<String> products = new ArrayList<>(num);

        for (int i = 0; i < num; i++) {

            String product = scanner.nextLine();
            products.add(product);
        }

        Collections.sort(products);

        for (int i = 0; i < num; i++) {

            System.out.printf("%d.%s%n", i + 1, products.get(i));
        }
    }
}
