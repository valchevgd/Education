import java.util.Scanner;

public class P12_BitcoinCodeGenerator {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int a = Integer.parseInt(input.nextLine());
        int b = Integer.parseInt(input.nextLine());
        int num = Integer.parseInt(input.nextLine());
        char m = 33;
        char n = 58;
        int numOne = 1;
        int numTwo = 1;

        while (num != 0){

            System.out.print(String.format("%c%c%d%d%c%c|",m, n, numOne, numTwo, n, m));
            if (numOne == a && numTwo == b){
                break;
            }
            m ++;
            if (m == 48){
                m = 33;
            }
            n ++;
            if (n == 65){
                n = 58;
            }
            if (numTwo == b && numOne < a){
                numOne ++;
                numTwo = 1;
            }else if (numTwo < b){
                numTwo ++;
            }

            num --;

        }

    }
}