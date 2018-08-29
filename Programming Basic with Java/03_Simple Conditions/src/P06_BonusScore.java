import java.util.Scanner;

public class P06_BonusScore {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double score = Double.parseDouble(input.nextLine());
        double bonusScore = 0;

        if (score <= 100){
            bonusScore = bonusScore + 5;
        }else if (score <= 1000){
            bonusScore = bonusScore + (score * 0.2);
        }else if (score > 1000){
            bonusScore = bonusScore + (score * 0.1);
        }

        if (score % 2 == 0){
            bonusScore = bonusScore + 1;
        }else if (score % 5 == 0){
            bonusScore = bonusScore + 2;
        }

        double totalScore = score + bonusScore;

        System.out.println(bonusScore);
        System.out.println(totalScore);
    }
}
