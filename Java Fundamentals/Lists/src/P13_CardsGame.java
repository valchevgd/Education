import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P13_CardsGame {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        List<Integer> firstPlayerCards = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        List<Integer> secondPlayerCards = Arrays
                .stream(scanner.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        while (Math.min(firstPlayerCards.size(), secondPlayerCards.size()) != 0) {

            playHand(firstPlayerCards, secondPlayerCards);
        }

        String winner = "";
        int result = 0;

        if (firstPlayerCards.size() != 0){

            result = getResult(firstPlayerCards);
            winner = "First";
        } else {

            result = getResult(secondPlayerCards);
            winner = "Second";
        }

        System.out.printf("%s player wins! Sum: %d", winner, result);
    }

    private static int getResult(List<Integer> playerCards) {

        int sum = 0;

        for (Integer card : playerCards) {
            sum += card;
        }

        return sum;


    }

    private static void playHand(List<Integer> firstPlayerCards, List<Integer> secondPlayerCards) {

        final int MIN_SIZE = Math.min(firstPlayerCards.size(), secondPlayerCards.size());

        for (int i = 0; i < MIN_SIZE; i++) {

            int firstPlayerCard = firstPlayerCards.get(0);
            int secondPlayerCard = secondPlayerCards.get(0);

            firstPlayerCards.remove(0);
            secondPlayerCards.remove(0);

            if (firstPlayerCard > secondPlayerCard) {

                firstPlayerCards.add(firstPlayerCard);
                firstPlayerCards.add(secondPlayerCard);
            } else if (firstPlayerCard < secondPlayerCard) {

                secondPlayerCards.add(secondPlayerCard);
                secondPlayerCards.add(firstPlayerCard);
            }
        }
    }
}
