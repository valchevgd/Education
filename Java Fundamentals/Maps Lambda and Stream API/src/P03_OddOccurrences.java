import java.util.*;

public class P03_OddOccurrences {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] words = scanner.nextLine().split(" ");

        Map<String, Integer> wordsCount = new LinkedHashMap<>();

        for (String word : words) {

            String wordToLowercase = word.toLowerCase();
            if (wordsCount.containsKey(wordToLowercase)) {

                wordsCount.put(wordToLowercase, wordsCount.get(wordToLowercase) + 1);
            } else {
                wordsCount.put(wordToLowercase, 1);
            }
        }

        List<String> output = new ArrayList<>();

        for (Map.Entry<String, Integer> entry : wordsCount.entrySet()) {

            if (entry.getValue() % 2 != 0) {

                output.add(entry.getKey());
            }
        }

        for (int i = 0; i < output.size(); i++) {

            System.out.print(output.get(i));
            if (i < output.size() - 1) {

                System.out.print(", ");
            }
        }


    }
}
