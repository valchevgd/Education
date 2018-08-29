import java.util.Scanner;

public class P11_EnterEvenNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());

        while (num % 2 != 0){
            System.out.println("Enter Even Number");
            num = Integer.parseInt(input.nextLine());
        }

        System.out.println("Even number entered: " + num);
    }
}
