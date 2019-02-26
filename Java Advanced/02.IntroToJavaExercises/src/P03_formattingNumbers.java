import java.text.DecimalFormat;
import java.util.Scanner;

public class P03_formattingNumbers {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int firstInt = input.nextInt();
        double firstDouble = input.nextDouble();
        double secondDouble = input.nextDouble();

        String result = "|";
        result += Integer.toHexString(firstInt).toUpperCase();


        int resultCount = result.length();

        for (int i = resultCount; i <= 10; i++) {
            result += ' ';
        }

        result += "|";
        String binary =  Integer.toBinaryString(firstInt);

        for (int i = binary.length(); i < 10; i++) {
            result += "0";
        }

        result += binary + "|";

        DecimalFormat decimalFormat = new DecimalFormat("###0.00");
        String formatFirstDouble = decimalFormat.format(firstDouble);

        for (int i = formatFirstDouble.length(); i < 10; i++) {
            result += " ";
        }

        result += formatFirstDouble + "|";

        decimalFormat = new DecimalFormat("###0.000");

        String formatSecondDouble = decimalFormat.format(secondDouble);

        result += formatSecondDouble;

        for (int i = formatSecondDouble.length(); i < 10; i++) {
            result += " ";
        }

        result += "|";

        System.out.println(result);
    }
}
