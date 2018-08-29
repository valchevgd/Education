import java.util.Scanner;

public class P15_3EqualNumbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double numberOne = input.nextDouble();
        double numberTwo = input.nextDouble();
        double numberThree = input.nextDouble();

        if (numberOne == numberTwo && numberTwo == numberThree){
            System.out.println("yes");
        }else {
            System.out.println("no");
        }
    }
}
