
import java.util.Scanner;

public class P06_CompareCharArrays {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String first =input.nextLine();
        String second = input.nextLine();

        if (first.compareTo(second) > 0){
            System.out.println(second.replace(" ", ""));
            System.out.println(first.replace(" ", ""));
        }else {
            System.out.println(first.replace(" ", ""));
            System.out.println(second.replace(" ", ""));
        }


    }
}
