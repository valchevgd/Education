import java.util.Scanner;

public class P07_SumSeconds {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int runnerOne = input.nextInt();
        int runnerTwo = input.nextInt();
        int runnerThree = input.nextInt();

        int totalTime = runnerOne + runnerTwo + runnerThree;

        if (totalTime < 10){
            System.out.println("0:0" + totalTime);
        }else if (totalTime < 60){
            System.out.println("0:" + totalTime);
        }else if (totalTime < 120){
            int seconds = totalTime - 60;
            if (seconds < 10){
                System.out.println("1:0" + seconds);
            }else {
                System.out.println("1:" + seconds);
            }
        }else if (totalTime < 180){
            int seconds = totalTime - 120;
            if (seconds < 10){
                System.out.println("2:0" + seconds);
            }else {
                System.out.println("2:" + seconds);
            }
        }
    }
}
