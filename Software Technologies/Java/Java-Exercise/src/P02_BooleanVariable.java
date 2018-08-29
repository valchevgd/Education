import java.util.Scanner;

public class P02_BooleanVariable {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String text = input.nextLine();

        boolean check = Boolean.valueOf(text);

        if (check){
            System.out.println("Yes");
        }else {
            System.out.println("No");
        }
    }
}
