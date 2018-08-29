import java.util.Scanner;

public class P11_EqualWords {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String wordOne = input.nextLine().toLowerCase();
        String wordTwo = input.nextLine().toLowerCase();

        if (wordOne.equals(wordTwo)){
            System.out.println("yes");
        }else {
            System.out.println("no");
        }
    }
}
