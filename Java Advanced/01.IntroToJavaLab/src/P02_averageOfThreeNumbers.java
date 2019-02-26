import java.util.Scanner;

public class P02_averageOfThreeNumbers {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double firstNum = input.nextDouble();
        double secondNum = input.nextDouble();
        double thirdNum = input.nextDouble();

        double sum = firstNum + secondNum + thirdNum;

        double average = sum / 3;

        System.out.printf("%.2f", average);
    }
}
