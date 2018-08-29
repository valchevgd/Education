import java.util.Scanner;

public class P03_3_IntegersSum {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int firstNum = Integer.parseInt(input.next());
        int secondNum = Integer.parseInt(input.next());
        int thirdNum = Integer.parseInt(input.next());

        if (checkTheSum(firstNum, secondNum, thirdNum)){
            if (firstNum > secondNum){
                System.out.printf("%d + %d = %d", secondNum, firstNum, thirdNum);
            }else {
                System.out.printf("%d + %d = %d", firstNum, secondNum, thirdNum);
            }
        }else if (checkTheSum(firstNum, thirdNum, secondNum)){
            if (firstNum > thirdNum){
                System.out.printf("%d + %d = %d", thirdNum, firstNum, secondNum);
            }else {
                System.out.printf("%d + %d = %d", firstNum, thirdNum, secondNum);
            }
        }else if (checkTheSum(secondNum, thirdNum, firstNum)){
            if (secondNum > thirdNum){
                System.out.printf("%d + %d = %d", thirdNum, secondNum, firstNum);
            }else {
                System.out.printf("%d + %d = %d", secondNum, thirdNum, firstNum);
            }
        }else {
            System.out.println("No");
        }
    }

    private static boolean checkTheSum(int numOne, int numTwo, int numThree) {
        boolean isEqual = false;

        if (numOne + numTwo == numThree){
            isEqual = true;
        }

        return isEqual;
    }
}
