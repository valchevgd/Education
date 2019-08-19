import java.util.Scanner;

public class P03_Substring {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String word = scanner.nextLine();
        String text = scanner.nextLine();

        int index = 0;

        while (index >= 0) {
            text = text.replaceAll(word, "");
            index = text.indexOf(word);
        }

        System.out.println(text);
    }
}
