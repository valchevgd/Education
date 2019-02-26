import java.util.Scanner;

public class P11_gameOfNames {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int n = Integer.valueOf(input.nextLine());

        String bestPlayer = "";
        int bestPoints = Integer.MIN_VALUE;

        for (int i = 0; i < n; i++) {

            String playerName = input.nextLine();
            int playerPoints = Integer.valueOf(input.nextLine());

            for (int j = 0; j < playerName.length(); j++) {
                if (playerName.charAt(j) % 2 == 0){
                    playerPoints +=  playerName.charAt(j);
                }else {
                    playerPoints -=  playerName.charAt(j);
                }
            }

            if (playerPoints > bestPoints){
                bestPoints = playerPoints;
                bestPlayer = playerName;
            }
        }

        System.out.printf("The winner is %s - %d points", bestPlayer, bestPoints);
    }
}
