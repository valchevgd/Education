import java.util.Scanner;

public class P26_MultiplicationSign {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] numbers = new int[3];

        numbers[0] = scanner.nextInt();
        numbers[1] = scanner.nextInt();
        numbers[2] = scanner.nextInt();

        String sign =getSign(numbers);

        System.out.println(sign);
    }

    private static String getSign(int[] numbers) {

        String result = "";

        for (int number : numbers) {

            if (number == 0) {

                result = "zero";
                break;
            }

            if (number < 0) {

                result = "negative";
            }

        }

        if (result.equals("")) {
            result = "positive";
        }

        return result;
    }
}
