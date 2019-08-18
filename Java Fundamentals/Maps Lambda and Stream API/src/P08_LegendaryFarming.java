import java.util.*;
import java.util.stream.Collectors;

public class P08_LegendaryFarming {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] legendary = new String[] {"shards", "fragments", "motes"};

        Map<String, Integer> legendaryMaterials = new TreeMap<>();
        legendaryMaterials.putIfAbsent("shards", 0);
        legendaryMaterials.putIfAbsent("fragments", 0);
        legendaryMaterials.putIfAbsent("motes", 0);
        Map<String, Integer> junkMaterials = new TreeMap<>();

        while (true) {

            String[] line = scanner.nextLine().split(" ");

            for (int i = 0; i < line.length; i += 2) {
                int quantity = Integer.parseInt(line[i]);
                String material = line[i + 1].toLowerCase();

                if (Arrays.asList(legendary).contains(material)) {

                    legendaryMaterials.put(material, legendaryMaterials.get(material) + quantity);

                    if (legendaryMaterials.get(material) >= 250) {
                        legendaryMaterials.put(material, legendaryMaterials.get(material) - 250);
                        printResults(material, legendaryMaterials, junkMaterials);
                        return;
                    }
                } else {

                    junkMaterials.putIfAbsent(material, 0);
                    junkMaterials.put(material, junkMaterials.get(material) + quantity);
                }
            }
        }
    }

    private static void printResults(String material, Map<String, Integer> legendaryMaterials, Map<String, Integer> junkMaterials) {

        String winner = getWinner(material);
        System.out.printf("%s obtained!%n", winner);

        LinkedHashMap<String, Integer> sortedLegendary = legendaryMaterials
                .entrySet()
                .stream()
                .sorted(Map.Entry.comparingByValue(Comparator.reverseOrder()))
                .collect(Collectors.toMap(
                        Map.Entry::getKey,
                        Map.Entry::getValue,
                        (oldValue, newValue) -> oldValue, LinkedHashMap::new));

        for (Map.Entry<String, Integer> legendary : sortedLegendary.entrySet()) {

            System.out.printf("%s: %d%n", legendary.getKey(), legendary.getValue());
        }

        for (Map.Entry<String, Integer> junk : junkMaterials.entrySet()) {
            System.out.printf("%s: %d%n", junk.getKey(), junk.getValue());
        }


    }

    private static String getWinner(String material) {

        String winner = null;

        switch (material) {

            case "shards":
                winner = "Shadowmourne";
                break;
            case "fragments":
                winner = "Valanyr";
                break;
            case "motes":
                winner = "Dragonwrath";
                break;
        }

        return winner;
    }
}
