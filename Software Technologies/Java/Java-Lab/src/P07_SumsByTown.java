import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class P07_SumsByTown {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        TreeMap<String, Double> towns = new TreeMap<>();


        for (int i = 0; i < n; i++) {
            String[] nextTown = input.nextLine()
                    .split(" /| ");

            String town = nextTown[0];
            double income = Double.parseDouble(nextTown[nextTown.length - 1]);

            if (!towns.containsKey(town)){
                towns.put(town, 0.0);
            }

            towns.put(town, towns.get(town) + income);
        }

        for (String key : towns.keySet()) {
            System.out.println(key + " -> " + towns.get(key));
        }

    }
}
