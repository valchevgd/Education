import java.util.Arrays;
import java.util.Scanner;

public class P16_CarRace {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        double[] results = getResults(numbers);

        double bestResult = Math.min(results[0], results[1]);
        String winner = "";

        if (results[0] <= results[1]) {

            winner = "left";
        } else {

            winner = "right";
        }

        System.out.printf("The winner is %s with total time: %.1f", winner, bestResult);


    }

    private static double[] getResults(int[] numbers) {

        double firstRacerResult = 0.0;
        double secondRacerResult = 0.0;

        final int LOOP_LENGTH = numbers.length / 2;

        for (int i = 0; i < LOOP_LENGTH; i++) {

            int firstRacerMovement = numbers[i];
            int secondRacerMovement = numbers[numbers.length - 1 - i];

            if (firstRacerMovement == 0) {

                firstRacerResult *= 0.8;
            } else {

                firstRacerResult += firstRacerMovement * 1.0;
            }

            if (secondRacerMovement == 0) {

                secondRacerResult *= 0.8;
            } else {

                secondRacerResult += secondRacerMovement * 1.0;
            }
        }

        return new double[] {firstRacerResult, secondRacerResult};
    }
}
