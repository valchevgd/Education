import java.util.Scanner;

public class P05_SymmetricNumbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        int n = Integer.parseInt(input.nextLine());
        String result ="";

        for (int i = 1; i <= n ; i++) {
            if (isSymmetric(i)){
                result += i + " ";
            }
            
        }

        System.out.println(result);
    }

    private static boolean isSymmetric(int num) {
        boolean symmetric = true;
        char[] number = Integer.toString(num).toCharArray();
        char[] reverce = number;

        for (int i = 0; i < number.length/2; i++) {
            if (number[i] != reverce[number.length - 1 - i]){
                symmetric = false;
                break;
            }
        }
        return symmetric;
    }
}
