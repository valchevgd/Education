import java.util.Scanner;

public class P09_VowelsSum {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String text = input.nextLine();
        int sum = 0;

        for (int i = 0; i < text.length(); i++) {
            switch (text.charAt(i)){
                case 'a':
                    sum += 1;
                    break;
                case 'e':
                    sum += 2;
                    break;
                case 'i':
                    sum += 3;
                    break;
                case 'o':
                    sum += 4;
                    break;
                case 'u':
                    sum += 5;
            }
        }

        System.out.println(sum);
    }
}
