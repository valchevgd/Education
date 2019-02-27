import java.util.Scanner;

public class P05_oddAndEvenPairs {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String[] numbers = input.nextLine().split("\\s+");

        StringBuilder result = new StringBuilder();

        if (numbers.length % 2 != 0){
            result.append("invalid length");
        }else {
            for (int i = 0; i < numbers.length - 1; i += 2) {

                int firstNum = Integer.valueOf(numbers[i]);
                int secondNum = Integer.valueOf(numbers[i + 1]);
                boolean isFirstNumEven = firstNum % 2 == 0;
                boolean isSecondNumEven = secondNum % 2 == 0;

                if (isFirstNumEven && isSecondNumEven){
                    result.append(firstNum).append(", ").append(secondNum).append(" -> both are even\n");
                }else if (isFirstNumEven || isSecondNumEven){
                    result.append(firstNum).append(", ").append(secondNum).append(" -> different\n");
                }else {
                    result.append(firstNum).append(", ").append(secondNum).append(" -> both are odd\n");
                }
            }
        }

        System.out.println(result);
    }
}
