import java.util.Scanner;

public class P03_ReverseCharacters {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        StringBuilder result = new StringBuilder();

        for (int i = 0; i < 3; i++) {
            char nextChar = input.nextLine().charAt(0);
            result.insert(0, nextChar);
        }

        System.out.println(result);
    }
}
