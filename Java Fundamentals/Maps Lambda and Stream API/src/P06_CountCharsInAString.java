import java.util.LinkedHashMap;
import java.util.Map;
import java.util.Scanner;

public class P06_CountCharsInAString {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();

        Map<Character, Integer> chars = new LinkedHashMap<>();

        for (int i = 0; i < text.length(); i++) {

            char characterAtIndex = text.charAt(i);

            if (characterAtIndex == ' ') {

                continue;
            }

            chars.putIfAbsent(characterAtIndex, 0);
            chars.put(characterAtIndex, chars.get(characterAtIndex) + 1);
        }

        for (Map.Entry<Character, Integer> entry : chars.entrySet()) {
            System.out.printf("%s -> %d%n", entry.getKey(), entry.getValue());
        }

    }
}
