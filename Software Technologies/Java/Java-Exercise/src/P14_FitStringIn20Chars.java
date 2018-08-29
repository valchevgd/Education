import java.util.Scanner;

public class P14_FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String text = input.nextLine();

        String result = "";

        if (text.length() < 20){
            result = text;
            for (int i = result.length(); i < 20; i++) {
                result +="*";
            }
        }else if (text.length() > 20){
            result = text.substring(0, 20);
        }

        System.out.println(result);
    }
}
