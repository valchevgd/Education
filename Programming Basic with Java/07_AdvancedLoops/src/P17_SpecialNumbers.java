import java.util.Scanner;

public class P17_SpecialNumbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int start = 1111;
        int stop = 9999;

        while (start <= stop){
            int n = start % 10;
            if (n == 0){
                start++;
            }else if (num % n == 0){
                n = (start / 10) % 10;
                if (n == 0){
                    start++;
                }else if (num % n == 0){
                    n = (start / 100) % 10;
                    if (n == 0){
                        start++;
                    }else if (num % n == 0){
                        n = start / 1000;
                        if(n == 0){
                            start++;
                        }else if (num % n == 0){
                            System.out.print(start + " ");
                            start ++;
                        }else {
                            start ++;
                        }
                    }else {
                        start ++;
                    }
                }else {
                    start ++;
                }
            }else {
                start ++;
            }

        }
    }
}
