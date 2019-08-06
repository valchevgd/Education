import java.util.Scanner;

public class P12_SmallestOfThreeNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int firstInt = scanner.nextInt();
        int secondInt = scanner.nextInt();
        int thirdInt = scanner.nextInt();

        printMin(firstInt, secondInt, thirdInt);
    }

    private static void printMin(int firstInt, int secondInt, int thirdInt) {

        System.out.println(Math.min(Math.min(firstInt, secondInt), thirdInt));
    }
}
