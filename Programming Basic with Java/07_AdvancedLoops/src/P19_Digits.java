import java.util.Scanner;

public class P19_Digits {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());

        int firstNum = num / 100;
        int secondNum = num / 10 % 10;
        int lastNum = num % 10;
        int row = firstNum + secondNum;
        int col = firstNum + lastNum;

        for (int i = 0; i < row; i++) {
            for (int j = 0; j < col; j++) {
                if (num % 5 == 0){
                    num -= firstNum;
                    System.out.print(num + " ");
                }else if (num % 3 == 0){
                    num -= secondNum;
                    System.out.print(num + " ");
                }else {
                    num += lastNum;
                    System.out.print(num + " ");
                }
            }
            System.out.println();

        }


    }
}
