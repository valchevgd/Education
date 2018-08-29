import java.util.Scanner;

public class P10_Autonomy {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int freeSpaceWidth = Integer.parseInt(input.nextLine());
        int freeSpaceLight = Integer.parseInt(input.nextLine());
        int freeSpaceHeight = Integer.parseInt(input.nextLine());
        int totalSpace = freeSpaceWidth * freeSpaceLight * freeSpaceHeight;


        while (totalSpace > 0){
            String box = input.nextLine();
            if ("Done".equals(box)){
                break;
            }

            int nextBoxes = Integer.parseInt(box);
            totalSpace -= nextBoxes;
        }

        if (totalSpace < 0){
            System.out.printf("No more free space! You need %d Cubic meters more.", Math.abs(totalSpace));
        }else {
            System.out.printf("%d Cubic meters left.", totalSpace);
        }
    }
}
