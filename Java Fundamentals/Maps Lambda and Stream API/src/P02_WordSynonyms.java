import java.util.*;

public class P02_WordSynonyms {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = Integer.parseInt(scanner.nextLine());

        Map<String, List<String>> words = new LinkedHashMap<>();

        for (int i = 0; i < num; i++) {
            String word = scanner.nextLine();
            String synonym = scanner.nextLine();

            words.putIfAbsent(word, new ArrayList<>());
            words.get(word).add(synonym);
        }

        for (Map.Entry<String, List<String>> entry : words.entrySet()) {

            System.out.printf("%s - ", entry.getKey());
            System.out.println(String.join(", ", entry.getValue()));
        }

    }
}
