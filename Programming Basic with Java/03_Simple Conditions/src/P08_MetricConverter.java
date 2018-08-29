import java.util.Scanner;

public class P08_MetricConverter {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double number = Double.parseDouble(input.nextLine());
        String in = input.nextLine();
        String out = input.nextLine();


        if ("mm".equals(in)){
            number = number / 1000;
        }else if ("cm".equals(in)){
            number = number / 100;
        }else if ("mi".equals(in)){
            number = number / 0.000621371192;
        }else if ("in".equals(in)){
            number = number / 39.3700787;
        }else if ("km".equals(in)){
            number = number / 0.001;
        }else if ("ft".equals(in)){
            number = number / 3.2808399;
        }else if ("yd".equals(in)){
            number = number / 1.0936133;
        }
        if ("mm".equals(out)){
            number = number * 1000;
        }else if ("cm".equals(out)){
            number = number * 100;
        }else if ("mi".equals(out)){
            number = number * 0.000621371192;
        }else if ("in".equals(out)){
            number = number * 39.3700787;
        }else if ("km".equals(out)){
            number = number * 0.001;
        }else if ("ft".equals(out)){
            number = number * 3.2808399;
        }else if ("yd".equals(out)){
            number = number * 1.0936133;
        }
        System.out.printf("%.8f %s", number, out);
    }
}
