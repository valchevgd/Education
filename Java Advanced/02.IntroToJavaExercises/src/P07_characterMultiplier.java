import java.util.Scanner;

public class P07_characterMultiplier {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        String firstWord = input.next("\\w+");
        String secondWord = input.next("\\w+");

        int length = Math.min(firstWord.length(), secondWord.length());

        int difference = firstWord.length() - secondWord.length();

        int sum = 0;

        for (int i = 0; i < length; i++) {
            sum += firstWord.charAt(i) * secondWord.charAt(i);
        }

        if (difference > 0){
            for (int i = secondWord.length(); i < firstWord.length(); i++) {
                sum += firstWord.charAt(i);
            }
        }else if(difference < 0){
            for (int i = firstWord.length(); i < secondWord.length(); i++) {
                sum += secondWord.charAt(i);
            }
        }

        System.out.println(sum);
    }
}
