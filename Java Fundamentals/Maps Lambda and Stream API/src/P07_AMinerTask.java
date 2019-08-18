import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;

public class P07_AMinerTask {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        Map<String, Long> resources = new LinkedHashMap<>();

        String line = scanner.nextLine();

        while (!"stop".equals(line)) {

            long resQuantity = Long.parseLong(scanner.nextLine());

            resources.putIfAbsent(line, Long.parseLong("0"));
            resources.put(line, resources.get(line) + resQuantity);

            line = scanner.nextLine();
        }

        for (Map.Entry<String, Long> entry : resources.entrySet()) {
            System.out.println(entry.getKey() + " -> " + entry.getValue());
        }

    }
}
