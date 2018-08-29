import java.util.Scanner;

public class P12_CurrencyConverter {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double money = Double.parseDouble(input.nextLine());
        String in = input.nextLine();
        String out = input.nextLine();
        if ("USD".equals(in)) {
            double leva = money * 1.79549;
            if ("EUR".equals(out)){
                double euro = leva / 1.95583;
                System.out.printf("%.2f %s", euro, out);
            }else if ("GBP".equals(out)){
                double pounds = leva / 1.95583;
                System.out.printf("%.2f %s", pounds, out);
            }else if ("BGN".equals(out)){
                System.out.printf("%.2f %s", leva, out);
            }
        }else if ("EUR".equals(in)) {
            double leva = money * 1.95583;
            if ("USD".equals(out)) {
                double dolars = leva / 1.79549;
                System.out.printf("%.2f %s", dolars, out);
            } else if ("GBP".equals(out)) {
                double pounds = leva / 2.53405;
                System.out.printf("%.2f %s", pounds, out);
            } else if ("BGN".equals(out)) {
                System.out.printf("%.2f %s", leva, out);
            }
        }else  if ("GBP".equals(in)) {
            double leva = money * 2.53405;
            if ("EUR".equals(out)){
                double euro = leva / 1.95583;
                System.out.printf("%.2f %s", euro, out);
            }else if ("USD".equals(out)){
                double dolars = leva / 1.79549;
                System.out.printf("%.2f %s", dolars, out);
            }else if ("BGN".equals(out)){
                System.out.printf("%.2f %s", leva, out);
            }
        }else if ("BGN".equals(in)) {
            if ("EUR".equals(out)){
                double euro = money / 1.95583;
                System.out.printf("%.2f %s", euro, out);
            }else if ("USD".equals(out)){
                double dolars = money / 1.79549;
                System.out.printf("%.2f %s", dolars, out);
            }else if ("GBP".equals(out)){
                double pounds = money / 2.53405;
                System.out.printf("%.2f %s", pounds, out);
            }
        }
    }
}
