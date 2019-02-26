import java.util.Scanner;

public class P01_readInput {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String firstWord = input.next("\\w+");
        String secondWord = input.next("\\w+");
        int firstInt = input.nextInt();
        int secondInt = input.nextInt();
        int thirdInt = input.nextInt();
        input.nextLine();
        String line = input.nextLine();

        int sum = firstInt + secondInt + thirdInt;

        System.out.println(firstWord + " " + secondWord + " " + line + " " + sum);
    }
}
