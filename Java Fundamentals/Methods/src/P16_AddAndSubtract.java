import java.util.Scanner;

public class P16_AddAndSubtract {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int firstInt = scanner.nextInt();
        int secondInt = scanner.nextInt();
        int thirdInt = scanner.nextInt();

        int result = subtractNumbers(addNumbers(firstInt, secondInt), thirdInt);

        System.out.println(result);
    }

    private static int subtractNumbers(int a, int b) {

        return a - b;
    }

    private static int addNumbers(int a, int b){

        return a + b;
    }
}
