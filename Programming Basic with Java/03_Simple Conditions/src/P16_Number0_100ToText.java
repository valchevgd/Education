import java.util.Scanner;

public class P16_Number0_100ToText {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int ede = num % 10;
        int dec = num / 10;

        if (num < 0 || num > 100){
            System.out.println("invalid number");
        }else if (num == 0){
            System.out.println("zero");
        }else if (num == 100){
            System.out.println("one hundred");
        }else if (num < 20){
            switch (num){
                case 1:
                    System.out.println("one"); break;
                case 2:
                    System.out.println("two"); break;
                case 3:
                    System.out.println("three"); break;
                case 4:
                    System.out.println("four"); break;
                case 5:
                    System.out.println("five"); break;
                case 6:
                    System.out.println("six"); break;
                case 7:
                    System.out.println("seven"); break;
                case 8:
                    System.out.println("eight"); break;
                case 9:
                    System.out.println("nine"); break;
                case 10:
                    System.out.println("ten"); break;
                case 11:
                    System.out.println("eleven"); break;
                case 12:
                    System.out.println("twelve"); break;
                case 13:
                    System.out.println("thirteen"); break;
                case 14:
                    System.out.println("fourteen"); break;
                case 15:
                    System.out.println("fifteen"); break;
                case 16:
                    System.out.println("sixteen"); break;
                case 17:
                    System.out.println("seventeen"); break;
                case 18:
                    System.out.println("eighteen"); break;
                case 19:
                    System.out.println("nineteen"); break;
            }
        }else if (num >= 20 && num < 100) {
            switch (dec) {
                case 2:
                    System.out.print("twenty");
                    break;
                case 3:
                    System.out.print("thirty");
                    break;
                case 4:
                    System.out.print("forty");
                    break;
                case 5:
                    System.out.print("fifty");
                    break;
                case 6:
                    System.out.print("sixty");
                    break;
                case 7:
                    System.out.print("seventy");
                    break;
                case 8:
                    System.out.print("eighty");
                    break;
                case 9:
                    System.out.print("ninety");
                    break;
            }

            switch (ede) {
                case 1:
                    System.out.println(" one");
                    break;
                case 2:
                    System.out.println(" two");
                    break;
                case 3:
                    System.out.println(" three");
                    break;
                case 4:
                    System.out.println(" four");
                    break;
                case 5:
                    System.out.println(" five");
                    break;
                case 6:
                    System.out.println(" six");
                    break;
                case 7:
                    System.out.println(" seven");
                    break;
                case 8:
                    System.out.println(" eight");
                    break;
                case 9:
                    System.out.println(" nine");
                    break;
            }
        }


    }
}
