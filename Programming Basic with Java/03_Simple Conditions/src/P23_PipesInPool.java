import java.util.Scanner;

public class P23_PipesInPool {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int volume = Integer.parseInt(input.nextLine());
        int pipeOne = Integer.parseInt(input.nextLine());
        int pipeTwo = Integer.parseInt(input.nextLine());
        double hours = Double.parseDouble(input.nextLine());

        double pipeOneWater = pipeOne * hours;
        double pipeTwoWater = pipeTwo * hours;
        double totalWater = pipeOneWater + pipeTwoWater;

        if (totalWater > volume){
            double overflows = totalWater - volume;
            System.out.printf("For %f hours the pool overflows with %f liters.", hours, overflows);
        }else {
            double poolPercent = Math.floor((totalWater / volume) * 100);
            double pipeOnePercent = Math.floor((pipeOneWater / totalWater) * 100);
            double pipeTwoPrecent = Math.floor((pipeTwoWater / totalWater) * 100);

            System.out.printf("The pool is %f%% full. Pipe 1: %f%%. Pipe 2: %f%%", poolPercent, pipeOnePercent, pipeTwoPrecent);
        }
    }
}
